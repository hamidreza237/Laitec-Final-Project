<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GalleryValidation extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'image' => 'required|max:5000|mimes:jpeg,jpg,png'
        ];
    }

    public function messages()
    {
        return [
            'image.required' => 'please enter an image for gallery',
            'image.max' => 'maximum size for image is 5 meg',
            'image.mimes' => 'the acceptable format for image is jpeg,jpg and png',
        ];
    }
}
