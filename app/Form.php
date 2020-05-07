<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $fillable = [
        'firma',
        'str',
        'plz',
        'land',
        'ges',
        'ust_id',
        'tel',
        'mob',
        'email',
        'website',
    ];
}
