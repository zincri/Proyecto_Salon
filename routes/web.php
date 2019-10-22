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

/** Usuario*/
Route::get('usuario/paquete','Admin\PaquetesController@index3');

Route::get('usuario/galeria', function () {
    $dato = array("j_img14.jpg","j_img15.jpg","j_img16.jpg");
    return view("contenido_usuario.galeria",['dato'=>$dato]);
});

Route::get('usuario/contacto', function () {
    return view('contenido_usuario.contacto');
});

Route::get('login', function () {
    return view('auth.login');
});
/** Cliente*/

Route::get('/', function () {
    return view('contenido_usuario.inicio');
});

Route::get('sesion', function () {
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
    return view('contenido_admin.dashboard.dashboard_gerente');
});
Route::get('/administrador/empleado', function () {
    return view('contenido_admin.dashboard.dashboard_empleado');
});

Route::resource('/administrador/eventos','Admin\EventosController');
Route::resource('/administrador/paquetes','Admin\PaquetesController');
Route::resource('/administrador/usuarios','Admin\UsuariosController');
Route::resource('/administrador/abonos','Admin\AbonosController');
Route::resource('/administrador/gastos','Admin\GastosController');

Route::resource('/administrador/e/abonos','Admin\Employee\AbonosController');
Route::resource('/administrador/e/eventos','Admin\Employee\EventosController');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Route::post('/login','Auth\LoginController@login')->name('login');
Route::get('/logout','Auth\LoginController@logout')->name('logout');

/** ZINCRI MENDOZA**/
