<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class saveUserRequest extends FormRequest
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
            'name' => 'required|max:255',
            'family' => 'required|max:255',
            'mobile' => 'required|min:9|max:11',
            'birth_date' => 'required',
            'national_code' => 'required',
            'job' => 'required',
            'username' => 'required',
            'password' => 'required',
            'email' => 'required|email',
            'lat' => 'required',
            'lan' => 'required',
        ];
    }
}
