<?php

namespace App\Http\Controllers;

use App\Form;
use App\Step;
use App\Http\Requests\FormValidator;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class FormController extends Controller
{
    public function index($id)
    {
        $data = Form::where('user_id', Auth::id())->get('field_id');

        foreach($data as $key => $value){

//            dd($value['field_id']);
            if($value['field_id'] == '1')
            {
                $stepId = '2';
            }
            elseif($value['field_id'] == '11'){
                $stepId = '3';
            }elseif($value['field_id'] == '17')
            {
                $stepId = '4';
            }
        }

        $step = Step::where('id', $stepId)->with('group.field.option')->first();
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

        if($id == 7){
            return redirect()->route('go-live');
        }else {
            return redirect()->route('form', $id);
        }
    }

    /**
     * Send an e-mail reminder to the user.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function sendEmailReminder($id)
    {
        $user = User::findOrFail($id);

        Mail::send('test', ['user' => $user], function ($m) use ($user) {
            $m->from('hello@app.com', 'Your Application');

            $m->to($user->email, $user->name)->subject('Your Reminder!');
        });
    }

    public function destroy($id)
    {

    }

    public function endStep()
    {
        $this->sendEmailReminder(1);
        return view('go-live');
    }

}
