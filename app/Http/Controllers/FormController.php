<?php

namespace App\Http\Controllers;

use App\FormChecking;
use App\FormMailer;
use App\IMailer;
use App\IForm;
use App\Http\Requests\FormValidator;
use Illuminate\Support\Facades\Auth;

class FormController extends Controller
{
    public function index(IForm $form)
    {
        return $form->getFormFields(new FormChecking());
    }

    public function store(FormValidator $request, $id, IForm $form)
    {
        $form->saveFormFields($request->except(['_token', 'checkbox']));

        if($id == 6){
            $this->sendEmails(new FormMailer);
        }

        return redirect()->route('step');
    }

    public function sendEmails(IMailer $mailer)
    {
        $mailer->sendEmailFormToAdmin(Auth::id());
        $mailer->sendEmailFormToUser(Auth::id());
    }

}
