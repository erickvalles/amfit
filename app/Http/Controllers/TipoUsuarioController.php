<?php

namespace App\Http\Controllers;

use App\TipoUsuario;
use Illuminate\Http\Request;

class TipoUsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipos_usuarios = TipoUsuario::all();

        return $tipos_usuarios;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TipoUsuario  $tipoUsuario
     * @return \Illuminate\Http\Response
     */
    public function show(TipoUsuario $tipos_usuario)
    {
        return $tipos_usuario;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TipoUsuario  $tipoUsuario
     * @return \Illuminate\Http\Response
     */
    public function edit(TipoUsuario $tipoUsuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TipoUsuario  $tipoUsuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoUsuario $tipoUsuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TipoUsuario  $tipoUsuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoUsuario $tipos_usuario)
    {
        //
    }
}
