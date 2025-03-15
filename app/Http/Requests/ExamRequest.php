<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExamRequest extends FormRequest
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
            'title' => 'required|max:255',
            'academic_year_id' => 'required|exists:academic_years,id',
            'start_date' => 'required|date',
            'end_date' => 'required|after_or_equal:start_date|date',
            'description' => 'nullable|max:255',
            'publish_date' => 'nullable|date'
        ];
    }

    public function messages()
    {
        return [
            'academic_year_id.required' => 'Please select academic year.',
            'academic_year_id.exists' => 'Please select valid academic year only.',
        ];
    }
}
