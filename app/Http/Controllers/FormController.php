<?php

namespace App\Http\Controllers;

use App\Form;
use App\FormMailer;
use App\IMailer;
use App\IForm;
use App\Step;
use Illuminate\Http\Request;
use App\Http\Requests\FormValidator;
use Illuminate\Support\Facades\Auth;

class FormController extends Controller
{
    public function index()
    {
        $data = Form::where('user_id', Auth::id())->get('field_id');
        $step_id = 4;
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
                    case '41':
                        $step_id = 7;
                        break;
                    default:
                        # code...
                        break;
                }
            }
        }

        if($step_id == 7){
            return view('step.go-live');
        }else{
            $step = Step::where('id', $step_id)->with('group.field.option')->first();
            return view('step.index', compact('step'));
        }



    }

    public function store(FormValidator $request, $id)
    {
        Form::saveFormFields($request);
//        $form->saveFormFields(new Form($request));

        if($id == 6){
            $this->sendEmails(new FormMailer);
        }

        return redirect()->route('step');
    }

    /**
     * Send an e-mail reminder to the user.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */



    public function destroy($id)
    {

    }

    public function sendEmails(IMailer $mailer)
    {
        $mailer->sendEmailFormToAdmin(Auth::id());
        $mailer->sendEmailFormToUser(Auth::id());
    }



}
