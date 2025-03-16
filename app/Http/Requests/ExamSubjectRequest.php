<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExamSubjectRequest extends FormRequest
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
            'exam_id'=>'required|exists:exams,id',
            'education_level_id'=>'required|exists:education_levels,id',
            'subject_id'=>'required|array',
            'subject_id.*'=>'required|exists:subjects,id',
            'full_marks'=>'required|array',
            'full_marks.*'=>'required|numeric',
            'pass_marks'=>'required|array',
            'pass_marks.*'=>'required|numeric',
        ];
    }
}
