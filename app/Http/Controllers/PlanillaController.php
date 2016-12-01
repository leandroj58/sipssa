<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlanillaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dd('Home de cada cliente');
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
     * @param  int  $id_usuario
     * @param  int  $id_planilla
     * @return \Illuminate\Http\Response
     */
    public function show($id_usuario,$id_planilla)
    {
        dd('Esta es la home del cliente: ' . $id_usuario . ' y se muestra la planilla: ' . $id_planilla);
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

    /**
     * Devuelve la planilla en estado de ACTIVA de un usuario en particular

     */
    public function planillaActiva($id_user){


    }

    /**
     * Devuelve un listado de las planillas de un usuario en particular

     */
    public function planillasUsuario($id_user){


    }

    /**
     * Devuelve los datos cargados en una planilla (el formulario completo con las filas cargadas)

     */
    public function detallePlanilla($id_planilla){


    }
}
