<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    public function field()
    {
        return $this->hasMany(Field::class, 'group_id', 'id');
    }
}
