<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Rutas a cada una de las vistas del proyecto

    Route::get('/', 'homeController@viewHome' );

//cargo el formulario de carga de la planilla que esta en "Active"
    Route::get('carga/{id_planilla_active}', 'planillaController@viewDetailActive' );

//ac{a es en donde caen los datos del formulario de carga/xxx despus del post
    Route::post('carga', 'cargaController@addData' );

//muestra la vista con todas las planillas del sistema.
    Route::get('planillas', 'planillaController@viewList' );

//Muestro los datos cargados en una planilla en particular
    Route::get('planilla/{id_planilla_active}', 'planillaController@viewDetail' );



/*
Route::get('/', function () {
    return view('welcome');
});


Route::get('clientes', function () {
    return view('clientes');
});

Route::get('asistente', function () {
    return view('asistente');
});

Route::get('pacientes/{id}', 'pacientesController@listPacientes' );

Route::get('createPaciente/{id}', 'pacientesController@createPaciente' );

*/