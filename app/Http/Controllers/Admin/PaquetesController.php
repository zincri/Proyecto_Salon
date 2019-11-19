<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Package;

class PaquetesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $datos = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
        return view("contenido_admin.paquetes.index",['datos'=>$datos]);
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
        $credentials=$this->validate(request(),[
            'nombre'=>'required|string|max:30',
            'descripcion'=>'required|string|max:1000',
            'file' => 'required|mimes:jpg,jpeg,png|max:1000',
            'file2'=>'required|mimes:jpg,jpeg,png|max:1000',
            'precio'=>'required|string|max:10',
        ]);
        $path = Storage::disk('public')->put('imgupload/paquetes', $request->file('file'));
        $imagen=asset($path);

        $path2 = Storage::disk('public')->put('imgupload/paquetes', $request->file('file2'));
        $imagen2=asset($path2);

        $paquete = new Package;
        $paquete->nombre = $request->get('nombre');
        $paquete->descripcion = $request->get('descripcion');
        $paquete->foto_principal = $imagen;
        $paquete->foto_secundaria = $imagen2;
        $paquete->precio = $request->get('precio');
        $paquete->activo = 1;
        $paquete->save();
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
