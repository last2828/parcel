<?php

namespace App\Http\Controllers;

use App\Form;
use App\Http\Requests\FormValidator;
use Illuminate\Http\Request;




class FormController extends Controller
{
    public function store(FormValidator $request)
    {

      $fields = $request->toArray();

    }
}


interface IValidator{
    public function authorize();
    public function rules();
}