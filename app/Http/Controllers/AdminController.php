<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;
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

        DB::update("ALTER TABLE users AUTO_INCREMENT = " . $fields['number_ranges']);

        if(isset($fields['customer_notification']))
        {
            $fields['customer_notification'] = true;
        }else{
            $fields['customer_notification'] = false;
        }

        Admin::find($id)->update($fields);
        return redirect()->route('admin-index');
    }
}
