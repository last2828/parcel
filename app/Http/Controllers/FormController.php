<?php

namespace App\Http\Controllers;

use App\Form;
use Illuminate\Http\Request;




class FormController extends Controller
{
    public function store(Request $request, $id)
    {
        dd($id);
        $fields = $request->toArray();

        foreach($fields as $field)
        {
            Form::create($field);
        }

    }
}
