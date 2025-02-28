<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AcademicYearRequest extends FormRequest
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
            'academic_title'=>'required|string|max:30',
            'starting_date'=>'required|date',
            'ending_date'=>'required|date|after:starting_date'
        ];
    }

    public function messages()
    {
        return [
            'academic_title.required'=>'Please enter the academic title.',
            'academic_title.max'=>'Max length is only 30.',
            'starting_date.required'=>'Please enter the starting date.',
            'starting_date.date'=>'Starting Date must be the type of date only.',
            'ending_date.required'=>'Please enter the ending date.',
            'ending_date.date'=>'Ending Date must be the type of date only.',
            'ending_date.after'=>'Ending Date must be after starting date only.',
        ];
    }
}
