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

//Jhoana----------------
Route::get('/', function () {
    return view('contenido_principal.inicio');
});

Route::get('paquetes', function () {
    return view('contenido_principal.paquetes');
});

Route::get('galeria', function () {
    return view('contenido_principal.galeria');
});

Route::get('formC', function () {
    return view('contenido_principal.form_createEvent');
});

//Dominguez
