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
            'cedula' => 'required',
            'telef1' => 'required',
            'telf2' => 'required',
            'direccion' => 'required',
            'email' => 'required',
            'rol' => 'required',
        ];
    }
}
