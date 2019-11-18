<?php
use Illuminate\Support\Facades\Session;
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
    $dato = array("images/j_img14.jpg","images/j_img15.jpg","images/j_img16.jpg");
    return view("contenido_usuario.galeria",['dato'=>$dato]);
});

Route::get('usuario/contacto', function () {
    return view('contenido_usuario.contacto');
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
    $datos_usuario = Session::get('usuario_session');
    return view('contenido_admin.dashboard.dashboard_gerente',['datos_usuario'=>$datos_usuario]);
});
Route::get('/administrador/empleado', function () {
    $datos_usuario = Session::get('usuario_session');
    return view('contenido_admin.dashboard.dashboard_empleado',['datos_usuario'=>$datos_usuario]);
});

Route::resource('/administrador/eventos','Admin\EventosController');
Route::resource('/administrador/clientes_organizadores','Admin\ClientesOrganizadoresController');
Route::resource('/administrador/paquetes','Admin\PaquetesController');
Route::resource('/administrador/usuarios','Admin\UsuariosController');
Route::resource('/administrador/abonos','Admin\AbonosController');
Route::resource('/administrador/gastos','Admin\GastosController');
Route::get('administrador/resetpass','Admin\UsuariosController@resetpass')->name('resetpass');
Route::post('administrador/resetpass','Admin\UsuariosController@saveresetpass')->name('resetpass');

Route::resource('/administrador/e/abonos','Admin\Employee\AbonosController');
Route::resource('/administrador/e/eventos','Admin\Employee\EventosController');



/* LOGIN DE LARAVEL IMPLEMENTADO */
Route::get('/login', function () {
    if(Auth::check()){
        if (Auth::user()->rol == "manager"){
            return redirect('administrador/dashboard');
        }
        elseif(Auth::user()->rol == "employee"){
            return redirect('administrador/empleado');
        }
        elseif(Auth::user()->rol == "client"){
            return redirect('sesion');
        }
    }
    return view('auth.login');
})->name('login');
Route::post('/login','Auth\LoginController@login')->name('login');
Route::post('/logout','Auth\LoginController@logout')->name('logout');

/* LOGIN DE LARAVEL IMPLEMENTADO */

/** ZINCRI MENDOZA**/

Route::resource('clientes/eventos','EventosClienteController');


//Route::get('/home', 'HomeController@index')->name('home');
