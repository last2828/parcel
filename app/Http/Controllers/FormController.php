<?php

namespace App\Http\Controllers;

use App\Form;
use App\Mail\AdminMail;
use App\Notifications\AdminNotification;
use App\Step;
use App\User;
use App\Admin;
use Illuminate\Http\Request;
use App\Http\Requests\FormValidator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Notifications\UserNotification;
use Illuminate\Support\Facades\Notification;

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
        foreach($request->except(['_token', 'checkbox']) as $key => $value) {
            $field_id = explode('-', $key);
            Form::create([
                'value' =>  $value,
                'field_id' => $field_id[1],
                'user_id' => Auth::id()
            ]);
        }

        if($id == 6){
            $this->sendEmails();
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
    public function sendEmailFormToUser($id)
    {
        $customer_notification = Admin::where('id', 1)->first();

        if($customer_notification['customer_notification'] == true)
        {
            $user = User::findOrFail($id);
            $user->notify(new UserNotification());
        }
    }

    public function sendEmailFormToAdmin($id)
    {
        $email_recipients = Admin::where('id', 1)->first()['email_recipient'];

        if(isset($email_recipients))
        {
            $data = json_decode($email_recipients, true);
            $emails = [];
            foreach($data as $key => $value){
                array_push($emails, $value['value']);
            }

            $user = User::findOrFail($id);

            Mail::to($emails)->send(new AdminMail($user));

        }
    }

    public function destroy($id)
    {

    }

    public function sendEmails()
    {
        $this->sendEmailFormToUser(Auth::id());
        $this->sendEmailFormToAdmin(Auth::id());
    }

}
