<?php

namespace App;

use App\Mail\AdminMail;
use App\Notifications\UserNotification;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class FormMailer extends Model implements IMailer
{

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

    public function sendEmailFormToUser($id)
    {
        $customer_notification = Admin::where('id', 1)->first();

        if($customer_notification['customer_notification'] == true)
        {
            $user = User::findOrFail($id);
            $user->notify(new UserNotification());
        }
    }
}
