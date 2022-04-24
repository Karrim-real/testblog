<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
        return [
            'fullname' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'fullname.required' => 'You should fill your name',
            'email.required' => 'You must fill your correct email',
            'subject.required' => 'Your subject must be filled',
            'message.required' => 'Put your message here',
        ];
    }
}
