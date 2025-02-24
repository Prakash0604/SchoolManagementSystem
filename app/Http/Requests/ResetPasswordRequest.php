<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResetPasswordRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'new_password'=>'required|min:4',
            'confirm_password'=>'required|same:new_password',
        ];
    }

    public function messages(){
        return [
            'new_password.required'=>'Please enter the password',
            'new_password.max'=>"Please enter at least 4 digits.",
            'confirm_password.required'=>'Please enter confirm password.',
            'confirm_password.same'=>'Confirm Password does not match.',
        ];
    }
}
