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
    public function index()
    {
        $data = Form::where('user_id', Auth::id())->get('field_id');
        $step_id = 1;
        if ($data) {
            foreach($data as $key => $value){
                switch ($value['field_id']) {
                    case '1':
                        $step_id = 2;
                        break;
                    case '11':
                        $step_id = 3;
                        break;
                    case '16':
                        $step_id = 4;
                        break;
                    case '22':
                        $step_id = 5;
                        break;
                    case '34':
                        $step_id = 6;
                        break;
                    default:
                        # code...
                        break;
                }
            }
        }
        // return $step_id;

        $step = Step::where('id', $step_id)->with('group.field.option')->first();
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
            return redirect()->route('step');
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
        return view('step.go-live');
    }

}
