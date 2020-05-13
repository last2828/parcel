<?php

namespace App\Http\Controllers;

use App\FormChecking;
use App\FormMailer;
use App\IMailer;
use App\IForm;
use App\Http\Requests\FormValidator;
use App\Jobs\SendMail;
use App\Mail\AdminMail;
use App\Mail\UserMail;
use App\Step;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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
            SendMail::dispatch();
//           $m = new FormMailer;
//           $m->sendEmailFormToAdmin();
//           $m->sendEmailFormToUser();
        }

        return redirect()->route('step');
    }

}
