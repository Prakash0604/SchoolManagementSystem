<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SalaryRequest extends FormRequest
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
            'user_id'=>'required|exists:users,id',
            'salary_month'=>'required|string',
            'salary_date'=>'required|date',
            'net_salary'=>'required|integer',
            'bonus'=>'nullable|integer',
            'fine'=>'nullable|integer'
        ];
    }

    public function messages()
    {
        return [
            'user_id.required'=>'Please select the Employee.',
            'user_id.exists'=>'Please select the valid employee.',
            'salary_month.required'=>'Please select the month.',
            'salary_date.required'=>'Please enter the salary date.',
            'salary_date.date'=>'Salary date must be the type of date only.',
            'net_salary.required'=>'Please enter the initial salary.',
            'net_salary.integer'=>'Salary amount must be an integer.',
            'bonus.integer'=>'Bonus amount must be an integer.',
            'fine.integer'=>'Fine amount must be an integer.',
        ];
    }
}
