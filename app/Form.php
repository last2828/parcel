<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $fillable = [
        'value',
        'field_id',
        'user_id'
    ];

}
