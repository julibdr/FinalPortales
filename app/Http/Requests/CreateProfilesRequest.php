<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProfilesRequest extends FormRequest
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
                'first_name' => 'required|string|max:25',
                'last_name' => 'required|string|max:25',
         
        ];
    }
    public function messages(): array {
        return [
            'first_name.required' => 'El nombre es obligatorio.',
            'first_name.max' => 'El nombre no debe tener más de 25 caracteres.',
            'last_name.required' => 'El apellido es obligatorio.',
            'last_name.max' => 'El apellido no debe tener más de 25 caracteres.',
    
        ];
    }
}


