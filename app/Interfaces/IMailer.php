<?php

namespace App\Interfaces;

interface IMailer{

    public function sendEmailFormToAdmin($user);
    public function sendEmailFormToUser($user);

}
