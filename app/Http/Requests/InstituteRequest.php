<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InstituteRequest extends FormRequest
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
            'logo'=>'mimes:png,jpg,webp|max:4024',
            'contact'=>'required|numeric|min:7',
            'schoolname'=>'required|string|max:50',
            'address'=>'required|string',
            'website'=>'nullable|string',
            'email'=>'required|email',
            'slogan'=>'required|string|max:100'
        ];
    }

    public function messages()
    {
        return [
            'logo.mimes'=>'Logo must be of type image only!',
            'logo.max'=>'Logo size must be of 4024 bytes!',
            'contact.required'=>'Please enter the contact number!',
            'contact.numeric'=>'Contact must of type number only!',
            'contact.min'=>'Contact number must be at least 7 digits long!',
            'schoolname.required'=>'Please enter the title.',
            'schoolname.max'=>'Max limit is 40 character only.',
            'slogan.required'=>'Please enter the slogan!',
            'address.required'=>'Please enter the address!',
            'email.required'=>'Please enter the email!',
            'email.email'=>'Please enter valid email!',
            'slogan.max'=>'Max limit for slogan is 100 character!',
        ];
    }
}
