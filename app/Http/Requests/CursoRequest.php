<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CursoRequest extends FormRequest
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
            'title' => 'required|string|max:605',
            'content' => 'required|string',
            'price' => 'required|numeric',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'El título es obligatorio.',
            'title.max' => 'El título no debe tener más de 605 caracteres.',
            'content.required' => 'La descripción es requerida.',
            'price.required' => 'El precio es obligatorio.',
            'price.numeric' => 'El precio debe ser un número',

        ];
    }
}
