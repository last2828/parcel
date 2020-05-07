<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class FormValidator extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        switch($this->id){
            case 1: return [

            ];

            case 2: return [

            ];

            case 3: return [

            ];

            case 4: return [

            ];

            case 5: return [

            ];

            case 6: return [

            ];

            case 7: return [

            ];
        }

    }
}
