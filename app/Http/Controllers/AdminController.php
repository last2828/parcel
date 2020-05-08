<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;

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

        if(isset($fields['customer_notification']))
        {
            $fields['customer_notification'] = true;
        }else{
            $fields['customer_notification'] = false;
        }

        Admin::find($id)->update($fields);
        return redirect()->route('admin_index');
    }
}
