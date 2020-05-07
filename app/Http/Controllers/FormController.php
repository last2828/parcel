<?php

namespace App\Http\Controllers;

use App\Form;
use App\Http\Requests\FormValidator;
use Illuminate\Http\Request;




class FormController extends Controller
{
    public function store(FormValidator $request, $id)
    {
      $request->validate($id);
      $fields = $request->toArray();

      foreach($fields as $field)
      {
          Form::create($field);
      }

    }
}
