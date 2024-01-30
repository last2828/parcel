<?php

namespace App;

use App\Interfaces\IForm;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Form extends Model implements IForm
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

    public function getFormFields(IFormChecking $checking)
    {
        $step_id = $checking->checkStepId();

        if($step_id == 7){
            return view('step.go-live');
        }else{
            $step = Step::where('id', $step_id)->with('group.field.option')->first();
            return view('step.index', compact('step'));
        }
    }

    public function saveFormFields($data)
    {
        foreach($data as $key => $value) {
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
