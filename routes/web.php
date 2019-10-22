<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});
*/
/** JHOANA DOMINGUEZ**/
Route::get('/', function () {
    return view('contenido_principal.inicio');
});

Route::get('paquete', 'Admin\PaquetesController@index2');
Route::resource('galeria', 'Client\GaleriaController');

Route::get('formC', function () {
    return view('contenido_principal.form_createEvent');
});

Route::get('contacto', function () {
    return view('contenido_principal.contacto');
});

Route::get('eventos', function () {
    return view('contenido_principal.Evento');
});

/** JHOANA DOMINGUEZ**/

/** ZINCRI MENDOZA**/

Route::get('/administrador/dashboard', function () {
    return view('contenido_admin.dashboard');
});

Route::resource('/administrador/eventos','Admin\EventosController');
Route::resource('/administrador/paquetes','Admin\PaquetesController');
Route::resource('/administrador/usuarios','Admin\UsuariosController');
Route::resource('/administrador/abonos','Admin\AbonosController');
Route::resource('/administrador/gastos','Admin\GastosController');
/** ZINCRI MENDOZA**/
