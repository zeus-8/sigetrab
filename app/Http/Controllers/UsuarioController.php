<?php

namespace sigetrab\Http\Controllers;

use Illuminate\Http\Request;

use sigetrab\Http\Requests;
use sigetrab\Http\Controllers\Controller;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=\sigetrab\User::All();
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
        $user=$request['name'];
        $u=strtoupper($user[0]).$request['apell'];
        \sigetrab\User::create([
                'nombre' => trim(strtoupper($request['name'])),
                'apellido' => trim(strtoupper($request['apell'])),
                'ci' => $request['ci'],
                'telef1' => $request['telef-Cel'],
                'telef2' => $request['telef-House'],
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
        //
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
        //
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
