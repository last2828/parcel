<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $fillable = [

        //first step fields
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

        //second step fields
        'vers',
        'waren',
        'genplante-1',
        'genplante-2',
        'genplante-3',

        //third step fields


        //fourth step

        //fifth
    ];
}
