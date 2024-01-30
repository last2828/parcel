<?php

namespace App\Interfaces;

interface IForm{
    public function getFormFields(IFormChecking $checking);
    public function saveFormFields($request);
}
