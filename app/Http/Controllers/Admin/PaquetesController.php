<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PaquetesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
        return view("contenido_admin.paquetes.index",['datos'=>$datos]);
    }

    public function index2()
    {
        $datos = array("images/j_img3.jpg", "images/j_img4.jpg", "images/j_img5.jpg");
        return view("contenido_principal.paquetes",['datos'=>$datos]);
    }

    public function index3()
    {
        $datos = array("images/j_img3.jpg", "images/j_img4.jpg", "images/j_img5.jpg");
        return view("contenido_usuario.paquetes",['datos'=>$datos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("contenido_admin.paquetes.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Redirect::to('administrador/paquetes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view("contenido_admin.paquetes.show");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datos = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
        return view("contenido_admin.paquetes.edit",['datos'=>$datos]);
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
        return Redirect::to('administrador/paquetes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Eliminar Datos
        return Redirect::to('administrador/paquetes');
    }
}
