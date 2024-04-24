<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
            'name' => 'required|max:100',
            'description' => 'required',
            'link_github' => 'required',
            'image' => 'required|file|max:1024|mimes:jpg,bmp,png',
            'type_id' => 'nullable|exists:types,id'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Il nome del progetto deve essere inserito',
            'name.max' => "Il nome del progetto deve avere massimo :max caratteri",

            'description.required' => 'La descrizione del progetto deve essere inserito',

            'link_github.required' => 'Il link del progetto deve essere inserito',

            'image.required' => "L'immagine del progetto deve essere inserita",
            'image.file' => "L'immagine del progetto deve essere un file",
            'image.max' => "La dimensione del file non deve superare i 1024 KB",
            'image.mimes' => "Il file deve essere un'immagine",

        ];
    }
}
