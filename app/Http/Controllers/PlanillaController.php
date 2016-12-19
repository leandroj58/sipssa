<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entities\Planilla;
use App\Entities\Fila;

class PlanillaController extends Controller
{

    public function index()
    {
        return view('layaout');
    }

    public function cargarEntradasPlanilla($id_planilla)
    {
        return view('cargarEntrada', compact('id_planilla'));
    }


    public function mostrarDetallePlanilla($id_planilla)
    {



        //con el id de la planilla, tengo que mandarle todas las entradas a la vista en forma de objeto,
        // luego recorrerlo y mostrar todo con un foreach de blade

        /*
        $datosPlanilla = [
            'fila1'=>['dato1', 'dato2', 'dato3'],
            'fila2'=>['dato1', 'dato2', 'dato3'],
        ];
        */

        $Planilla = Planilla::findOrFail($id_planilla);

        return view('detallePlanilla', compact('id_planilla','Planilla'));

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
