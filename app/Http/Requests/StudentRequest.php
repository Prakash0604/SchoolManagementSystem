<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
            'student_name' => 'required|string|max:30',
            'student_image' => 'nullable|mimes:png,jpg,jpeg,webp',
            'student_contact' => 'required|min:10|numeric',
            'date_of_admission' => 'required|date',
            'student_dob' => 'required|date',
            'student_dicount' => 'nullable|numeric',
            'student_gender' => 'required|in:Male,Female,Others',
            'student_email' => 'required|email',
            'student_address' => 'required|string',
            'academic_year_id' => 'nullable|exists:academic_years,id',
            'education_level_id' => 'nullable|exists:education_levels,id',
            'classroom_id' => 'nullable|exists:classrooms,id',
            'registraion_number' => 'nullable|string',
            'roll_number' => 'nullable|string',
            'previous_school' => 'nullable|string',
            'relation' => 'nullable|array',
            'relation.*' => 'nullable|in:Mother,Father,Brother,Sister,Uncle,Aunty,Others',
            'guardian_name' => 'nullable|array',
            'guardian_name.*' => 'nullable|string',
            'contact' => 'nullable|array',
            'contact.*' => 'nullable|numeric|min:10',
            'occupation' => 'nullable|array',
            'occupation.*' => 'nullable|string',

        ];
    }

    public function messages()
    {
        return [
            'student_name.required' => 'The student name is required.',
            'student_name.string' => 'The student name must be a valid string.',
            'student_name.max' => 'The student name must not exceed 30 characters.',

            'student_image.mimes' => 'The student image must be a file of type: png, jpg, jpeg, webp.',

            'student_contact.required' => 'The student contact number is required.',
            'student_contact.numeric' => 'The student contact must be a valid number.',
            'student_contact.min' => 'The student contact must be at least 10 digits long.',

            'date_of_admission.required' => 'The date of admission is required.',
            'date_of_admission.date' => 'The date of admission must be a valid date.',

            'student_dob.required' => 'The student date of birth is required.',
            'student_dob.date' => 'The student date of birth must be a valid date.',

            'student_dicount.numeric' => 'The student discount must be a numeric value.',

            'student_gender.required' => 'The student gender is required.',
            'student_gender.in' => 'The student gender must be Male, Female, or Others.',

            'student_email.required' => 'The student email is required.',
            'student_email.email' => 'The student email must be a valid email address.',

            'student_address.required' => 'The student address is required.',
            'student_address.string' => 'The student address must be a valid string.',

            'academic_year_id.exists' => 'The selected academic year is invalid.',
            'education_level_id.exists' => 'The selected education level is invalid.',
            'classroom_id.exists' => 'The selected classroom is invalid.',

            'registraion_number.string' => 'The registration number must be a valid string.',
            'roll_number.string' => 'The roll number must be a valid string.',
            'previous_school.string' => 'The previous school must be a valid string.',

            'relation.array' => 'The relation field must be an array.',
            'relation.*.in' => 'Each relation must be either Mother, Father, Brother, Sister, Uncle, Aunty, or Others.',

            'guardian_name.array' => 'The guardian name must be an array.',
            'guardian_name.*.string' => 'Each guardian name must be a valid string.',

            'contact.array' => 'The contact field must be an array.',
            'contact.*.numeric' => 'Each contact number must be a valid number.',
            'contact.*.min' => 'Each contact number must be at least 10 digits long.',

            'occupation.array' => 'The occupation field must be an array.',
            'occupation.*.string' => 'Each occupation must be a valid string.',
        ];
    }
}
