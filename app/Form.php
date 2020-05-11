<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Form extends Model
{
    protected $fillable = [
        'value',
        'field_id',
        'user_id'
    ];

    public function field()
    {
        return $this->hasMany(Field::class, 'id', 'field_id');
    }

    public static function saveFormFields($request)
    {
//        dd($request);
        foreach($request->except(['_token', 'checkbox']) as $key => $value) {
            $field_id = explode('-', $key);
            self::create([
                'value' =>  $value,
                'field_id' => $field_id[1],
                'user_id' => Auth::id()
            ]);
        }

        return true;
    }

}
