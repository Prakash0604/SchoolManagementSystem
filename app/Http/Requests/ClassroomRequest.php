<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClassroomRequest extends FormRequest
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
            'academic_year_id'=>'required|exists:academic_years,id',
            'education_level_id'=>'required|exists:education_levels,id',
            'user_id'=>'required|exists:users,id',
            'class_title'=>'required|string|max:30',
            'monthly_tution_fees'=>'nullable|numeric',
        ];
    }

    public function messages()
    {
        return [
            'academic_year_id.required'=>'Please select the academic year.',
            'academic_year_id.exists'=>'Please select valid academic year only!',

            'education_level_id.required'=>'Please select the education level.',
            'education_level_id.exists'=>'Please select valid education level only!',

            'user_id.required'=>'Please select the employee.',
            'user_id.exists'=>'Please select valid employee only!',

            'class_title.required'=>'Please enter the class title.',
            'class_title.max'=>'Class title should be only 30 character long.',
            'monthly_tution_fees.numeric'=>'Monthly Tution fees should be only a type of numeric.'
        ];
    }
}
