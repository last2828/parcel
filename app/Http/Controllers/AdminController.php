<?php

namespace App\Http\Controllers;

use App\Admin;
use App\FormMailer;
use App\Http\Requests\AdminValidator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        $fields = Admin::all()->first();
        return view('admin.index', compact('fields'));
    }

    public function update(Request $request, $id)
    {
        $fields = $request->all();
//        dd($fields);
        if(isset($fields['number_ranges'])){
            DB::update("ALTER TABLE users AUTO_INCREMENT = " . $fields['number_ranges']);
        }

        if(isset($fields['customer_notification']))
        {
            $fields['customer_notification'] = true;
        }else{
            $fields['customer_notification'] = false;
        }

        if(isset($fields['email_recipient']))
        {
            $data = json_decode($fields['email_recipient'], true);
            $emails = [];
            foreach($data as $key => $value){
                array_push($emails, $value['value']);
            }

            $fields['email_recipient'] = $emails;
        }


        $test = new FormMailer();
        $r = $test->sendEmailFormToAdmin(Auth::id());
        return $r;
        
        Admin::find($id)->update($fields);
        return redirect()->route('admin-index');
    }
}
