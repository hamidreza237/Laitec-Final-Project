<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingValidation extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'title' => 'required|max:10|min:2',
            'desc' => 'required|max:500',
            'key' => 'required|max:200',
            'author' => 'required|max:50'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'please enter a title for website',
            'title.min' => 'minimum length for title is 2 characters',
            'title.max' => 'maximum length for title is 10 characters',
            'desc.max' => 'maximum length for title is 500 characters',
            'desc.required' => 'please wright a describtion for website',
            'key.required' => 'please wright a keyword for website',
            'key.max' => 'maximum length for title is 200 characters',
            'author.required' => 'please wright the name of author for website',
            'author.max' => 'maximum length for name of author is 50 characters'
        ];
    }
}
