<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Step extends Model
{
    public function group()
    {
        return $this->hasMany(Group::class, 'step_id', 'id');
    }
}
