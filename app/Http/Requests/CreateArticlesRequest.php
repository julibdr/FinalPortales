<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateArticlesRequest extends FormRequest
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
            'category' => 'required|string', 
            'name' => 'string|max:255',
        ];
    }
    public function messages(): array
    {
        return [
            'title.required' => 'Debe ingresar un título para su artículo.',
            'title.max' => 'El título no debe tener más de 605 caracteres.',
            'content.required' => 'El contenido del artículo no puede quedar vacío.',
            'category.required' => 'Debe ingresar una categoría.',
            'name.required' => 'Debe ingresar un nombre para su artículo.',
            'name.max' => 'El nombre no debe tener más de 255 carácteres.',

        ];
    }
}
