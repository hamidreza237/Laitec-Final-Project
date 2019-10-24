<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutValidation extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'cont' => 'required|max:500',
            'font' => 'max:32'
        ];
    }

    public function messages()
    {
        return [
            'cont.required' => 'please enter a content for About',
            'cont.max' => 'maximum size for content is 500 characters',
            'font.max' => 'maximum font size is 32'
        ];
    }
}
