<?php

namespace App\Http\Requests\backend\messages;

use Illuminate\Foundation\Http\FormRequest;

class ReplyMail extends FormRequest
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
            'message' => ['required'],
            'name' => ['required', 'string'],
            'email' => ['required', 'email']
        ];
    }
}
