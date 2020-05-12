<?php

namespace App;

interface IMailer{

    public function sendEmailFormToAdmin($id);
    public function sendEmailFormToUser($id);

}