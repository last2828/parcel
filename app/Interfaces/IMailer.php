<?php

namespace App;

interface IMailer{

    public function sendEmailFormToAdmin();
    public function sendEmailFormToUser();

}