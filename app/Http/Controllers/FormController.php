<?php

namespace App\Http\Controllers;

use App\Form;
use App\Step;
use App\Http\Requests\FormValidator;

class FormController extends Controller
{
    public function index($id)
    {
      $step = Step::where('id', $id)->with('group.field.option')->first();
      // return $step;
      return view('step.index', compact('step'));
    }

    public function store(FormValidator $request)
    {

      $fields = $request->toArray();

    }
}
