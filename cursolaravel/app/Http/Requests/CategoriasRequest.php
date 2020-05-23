<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoriasRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'descripcion' => 'required|unique:Categorias|max:50|min:3'
        ];
    }
    public function messages()
    {
        return[
           'descripcion.required' => 'La Descripcion Categoria, debe ser obligatoria', 
           'descripcion.unique' => 'La Descripcion Categoria, ya se encuentra registrada en la base de datos', 
        ];
    }
}
