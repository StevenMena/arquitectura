<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NoticiaCreateRequest extends FormRequest
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
            'nombreNoticia' => 'required',
            'textoNoticia' => 'required',
            'path' => 'required',
        ];
    }

    public function messages(){
        return [
            'nombreNoticia.required' => 'Nombre de Noticia es obligatorio',
            'textoNoticia.required' => 'Texto de Noticia es obligatorio',
            'path.required' => 'Seleccionar un archivo es obligatorio para continuar con el registro',
        ];
    }
}
