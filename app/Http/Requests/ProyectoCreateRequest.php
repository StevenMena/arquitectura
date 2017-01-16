<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProyectoCreateRequest extends FormRequest
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
            'nombreProyecto' => 'required',
            'descripcion' => 'required',
            'tipo' => 'required',
            'origen' => 'required',
            'path' => 'required',
        ];
    }

    public function messages(){
        return [
            'nombreProyecto.required' => 'Nombre del Proyecto es obligatorio',
            'descripcion.required' => 'Descripcion del Proyecto es obligatorio',
            'tipo.required' => 'Tipo de Proyecto es obligatorio',
            'origen.required' => 'Origen de Proyecto es obligatorio',
            'path.required' => 'Seleccionar un archivo es obligatorio para continuar con el registro',
        ];
    }
}
