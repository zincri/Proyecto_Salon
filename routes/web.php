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
/** JHOANA DOMINGUEZ**/

/** Usuario*/
Route::get('usuario/paquete','Client\GeneralController@paquetes');
Route::get('usuario/contacto','Client\GeneralController@contacto');
Route::resource('/','Client\GeneralController');

/** Cliente*/

Route::get('sesion','Client\EventosController@sesion');
Route::resource('paquete', 'Client\EventosController');
Route::get('eventos','Client\EventosController@view');
Route::get('eventos/show/{id}','Client\EventosController@showEvent');
Route::post('eventos/eliminar/{id}','Client\EventosController@destroy');
Route::get('eventos/galeria/{id}','Client\GaleriasController@index');
Route::get('eventos/galeria/create/{id}','Client\GaleriasController@create');
Route::post('eventos/galeria/store/{id}','Client\GaleriasController@store');
Route::resource('eventos/galeria','Client\GaleriasController');
Route::get('contacto', function () {
    return view('contenido_principal.contacto');
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
Route::get('administrador/resetpassuser/{id}','Admin\UsuariosController@resetpassuser')->name('resetpassuser');
Route::post('administrador/resetpassuser/{id}','Admin\UsuariosController@saveresetpassuser')->name('resetpassuser');
Route::get('administrador/uploadimage/{id}','Admin\GaleriaController@index')->name('uploadimage');
Route::post('administrador/destroyimage/{id}','Admin\GaleriaController@destroy')->name('destroyimage');

Route::get('administrador/uploadnewimage/{id}','Admin\GaleriaController@create')->name('uploadnewimage');
Route::post('administrador/uploadnewimage/{id}','Admin\GaleriaController@store')->name('uploadnewimage');

Route::resource('/administrador/e/abonos','Admin\Employee\AbonosController');
Route::resource('/administrador/e/eventos','Admin\Employee\EventosController');



/* LOGIN DE LARAVEL IMPLEMENTADO */
Route::get('/login', function () {
    if(Auth::check()){
        if (Auth::user()->rol == "manager" || Auth::user()->rol == "employee"){
            return redirect('administrador/dashboard');
        }/*
        elseif(Auth::user()->rol == "employee"){
            return redirect('administrador/empleado');
        }*/
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

