<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable = [
        'number_ranges',
        'email_recipient',
        'customer_notification',
    ];
}
