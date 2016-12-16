<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('layout');
});

//Home - muestro la planilla que esta activa para que el usuario comience de una a cargar entradas
// esta es la HOME del cliente, no del sistema completo
Route::get('home/{id_planilla}', [

    'as' => 'home',
    'uses' => 'PlanillaController@cargarEntradasPlanilla'
]);

Route::get('planilla/{id_planilla}', [

    'as' => 'Detalle.planilla',
    'uses' => 'PlanillaController@mostrarDetallePlanilla'
]);


