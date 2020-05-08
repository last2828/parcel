<?php

namespace App\Http\Controllers;

use App\Form;
use App\Step;
use App\Http\Requests\FormValidator;
use Illuminate\Support\Facades\Auth;

class FormController extends Controller
{
    public function index($id)
    {
        $step = Step::where('id', $id)->with('group.field.option')->first();
        return view('step.index', compact('step'));
    }

    public function store(FormValidator $request, $id)
    {
        foreach($request->except(['_token', 'checkbox']) as $key => $value) {
            $field_id = explode('-', $key);
            Form::create([
                'value' =>  $value,
                'field_id' => $field_id[1],
                'user_id' => Auth::id()
            ]);
        }

        $id = ($id+1);

        if($id == 7){
            return redirect()->route('go-live');
        }else {
            return redirect()->route('form', $id);
        }
    }

    public function destroy($id)
    {

    }

    public function endStep()
    {
        return view('go-live');
    }

}
