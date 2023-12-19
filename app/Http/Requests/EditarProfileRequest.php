<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditarProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
        'first_name' => 'required|string|max:100',
        'last_name' => 'required|string|max:100',
        'email' => 'required|string|max:100',
        'password' => 'required|string|max:100',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function messages(): array
    {
        return [
            'first_name.required' => 'El nombre es obligatorio.',
            'first_name.max' => 'El nombre no debe tener más de 100 caracteres.',
            'last_name.required' => 'El apellido es obligatorio.',
            'last_name.max' => 'El apellido no debe tener más de 100 caracteres.',
            'email.required' => 'El email es obligatorio.',
            'email.max' => 'El email no debe tener más de 100 caracteres.',
            'password.required' => 'El password es obligatorio.',
            'password.max' => 'El password no debe tener más de 100 caracteres.',
        ];
    }
}
