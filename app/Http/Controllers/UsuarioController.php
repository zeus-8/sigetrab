<?php

namespace sigetrab\Http\Controllers;

use Illuminate\Http\Request;

use sigetrab\Http\Requests;
use sigetrab\Http\Controllers\Controller;
use sigetrab\User;
use Session;
use Redirecct;
class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users= User::All();
        return view('usuario.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user=$request['nombre'];
        $u=strtoupper($user[0]).strtolower($request['apellido']);
        User::create([
                'nombre' => trim(strtoupper($request['nombre'])),
                'apellidoido' => trim(strtoupper($request['apellido'])),
                'ci' => $request['ci'],
                'telef1' => $request['telef1'],
                'telef2' => $request['telef2'],
                'email' => trim(strtoupper($request['email'])),
                'password' => bcrypt($u),
                'name_user' => $u,
                'rol' => $request['rol'],
            ]);
        return redirect('/usuario')->with('message','store');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('usuario.edit', ['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->fill($request->all());
        $user->save();
        Session::flash('message', 'Los datos se moldificaron exitosamente');
        return Redirecct::to('/usuario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
