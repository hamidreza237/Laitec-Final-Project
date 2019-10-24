<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactVerification extends FormRequest
{



    public function rules()
    {
        return [
            'fullname' => 'required|max:20',
            'email' => 'required|max:50',
            'comment' => 'max:200'
        ];
    }

    public function messages()
    {
        return [
            'fullname.required' => 'please enter your name',
            'fullname.max' => 'please insert a shorter name',
            'email.required' => 'please enter your email',
            'email.max' => 'please insert a shorter email',
            'comment.max' => 'your comment is too long!',
        ];
    }
}
