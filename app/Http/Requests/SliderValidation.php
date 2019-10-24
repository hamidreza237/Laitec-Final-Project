<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SliderValidation extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'image' => 'required|max:5000|mimes:jpeg,jpg,png',
            'caption' => 'required|max:100',
            'alter' => 'required|max:50'
        ];
    }

    public function messages()
    {
        return [
            'image.required' => 'please enter an image for slider',
            'image.max' => 'maximum size for image is 5 meg',
            'image.mimes' => 'the acceptable format for image is jpeg,jpg and png',
            'caption.required' => 'please wright a caption for slider',
            'caption.max' => 'maximum length for caption is 100 characters',
            'alter.max' => 'maximum length for alter is 50 characters',
            'alter.required' => 'please wright a caption for image'
        ];
    }
}
