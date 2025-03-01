<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AssignGradeSubjectRequest extends FormRequest
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
            'academic_year_id' => 'required|exists:academic_years,id',
            'education_level_id' => 'required|exists:education_levels,id',

            'subject_id' => 'required|array',
            'subject_id.*' => 'required|exists:subjects,id',

            'full_marks' => 'required|array',
            'full_marks.*' => 'required|numeric',

            'pass_marks' => 'required|array',
            'pass_marks.*' => 'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            'academic_year_id.required' => 'Please select the academic year.',
            'academic_year_id.exists' => 'Please select a valid academic year only.',

            'education_level_id.required' => 'Please select the education level.',
            'education_level_id.exists' => 'Please select a valid education level only.',

            'subject_id.required' => 'Please select the subjects.',
            'subject_id.array' => 'Invalid subjects format.',
            'subject_id.*.required' => 'Please select subjects.',
            'subject_id.*.exists' => 'Please select valid subjects only.',

            'full_marks.required' => 'Please enter the full marks.',
            'full_marks.array' => 'Invalid full marks format.',
            'full_marks.*.required' => 'Please enter the full marks.',
            'full_marks.*.numeric' => 'Please enter numeric value only!',

            'pass_marks.required' => 'Please enter the pass marks.',
            'pass_marks.array' => 'Invalid pass marks format.',
            'pass_marks.*.required' => 'Please enter the pass marks.',
            'pass_marks.*.numeric' => 'Please enter numeric value only!',
        ];
    }
}
