<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'image'=>'nullable|mimes:png,jpg',
            'name'=>'required|string|max:50',
            'contact'=>'required|numeric|min:7',
            'join_date'=>'required|date',
            'role_id'=>'required|exists:roles,id',
            'monthly_salary'=>'required|numeric',
            'guardains'=>'nullable|string',
            'national_id'=>'nullable|string',
            'education'=>'nullable|string',
            'gender'=>'required|in:male,female,others',
            'religion_id'=>'nullable|exists:religions,id',
            'blood_group_id'=>'nullable|exists:blood_groups,id',
            'experience'=>'nullable|string',
            'email'=>'required|email',
            'dob'=>'required|date',
            'home_address'=>'nullable|string'
        ];
    }

    public function messages()
    {
        return [
            'image.mimes'=>'Please insert valid image only!',
            'name.required'=>'Please enter the name.',
            'name.max'=>'Max limit is 40 character.',
            'contact.required'=>'Please enter the contact number.',
            'contact.numeric'=>'Contact number should be the type of number only!',
            'contact.min'=>'Contact number should be of 7 digits long.',
            'join_date.required'=>'Please enter the join date.',
            'join_date.date'=>'Join date should be the type of date only.',
            'role_id.required'=>'Please select the role.',
            'role_id.exists'=>'Please select valid role only.',
            'monthly_salary.required'=>'Please enter the monly salary.',
            'monthly_salary.numeric'=>'Salary must be a type of number only.',
            'gender.requried'=>'Please select the gender.',
            'gender.in'=>'Please select valid gender only.',
            'religion_id.exists'=>'Please select valid religion only.',
            'blood_group_id.exists'=>'Please select valid blood group only.',
            'email.required'=>'Please enter the email.',
            'dob.required'=>'Please enter date of birth.',
            'dob.date'=>'Date of birth must be a type of date only.',
            'email.email'=>'Please enter valid email.',
        ];
    }
}
