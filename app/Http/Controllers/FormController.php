<?php

namespace App\Http\Controllers;

use App\Form;
use App\Http\Requests\FormValidator;




class FormController extends Controller
{
    public function store(FormValidator $request)
    {

      $fields = $request->toArray();

    }
}
