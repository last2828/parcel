<?php

namespace App;

interface IForm{

    public function getFormFields(IFormChecking $checking);
    public function saveFormFields($request);

}