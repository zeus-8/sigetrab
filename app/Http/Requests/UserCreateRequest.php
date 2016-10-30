<?php

namespace sigetrab\Http\Requests;

use sigetrab\Http\Requests\Request;

class UserCreateRequest extends Request
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
            'nombre' => 'required|string|max:50|min:4|regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ0-9\.\- ]+$/i', 
            'apellido' => 'required|string|max:50|min:4|regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ0-9\.\- ]+$/i', 
            'ci' => 'required|unique:users,ci', 
            'telef1' => 'required', 
            'telef2' => 'required', 
            'email' => 'required|unique:users,email', 
            'direccion' => 'required|string|max:50|min:4|regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ0-9\.\- ]+$/i', 
            'rol' => 'required|in:Administrador,Profesor,Alumno',
        ];
    }
}
