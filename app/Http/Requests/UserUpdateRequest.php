<?php

namespace sigetrab\Http\Requests;

use sigetrab\Http\Requests\Request;
use Illuminate\Routing\Route;
class UserUpdateRequest extends Request
{
    private $route;

    public function __construct(Route $route)
    {
        $this->route = $route;
    }

    


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
            'ci' => 'required|unique:users,ci,' . $this->route->getParameter('usuario'), 
            'telef1' => 'required', 
            'telef2' => 'required', 
            'email' => 'required|unique:users,email,' . $this->route->getParameter('usuario'), 
            'direccion' => 'required', 
            'rol' => 'required|in:1,2,3',
        ];
    }
}
