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
            'nombre' => 'required', 
            'apellido' => 'required', 
            'ci' => 'required', 
            'telef1' => 'required', 
            'telef2' => 'required', 
            'email' => 'required|unique:users,email', 
            'direccion' => 'required', 
            'rol' => 'required',
        ];
    }
}
