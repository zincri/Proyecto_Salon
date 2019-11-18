<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Package;
use App\Event;

class GeneralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $datos = Package::all();
        return view("contenido_principal.paquetes",['datos'=>$datos]);
    }

    public function index2()
    {
        $datos = Package::all();
        return view("contenido_usuario.paquetes",['datos'=>$datos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return 'lll';
       // view("contenido_principal.form_createEvent");
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
            'nombre' => 'required|string',
            'descripcion'=>'required',
            'numero_invitados'=>'required',
            'hora'=>'required',
            'fecha'=>'required',
            'paquete_id'=>'required',
        ]);

        $evento = new Event;
        $evento->nombre = $request->get('nombre');
        $evento->descripcion = $request->get('descripcion');
        $evento->numero_invitados = $request->get('numero_invitados');
        $evento->confirmado = 0;
        $evento->hora = $request->get('hora');
        $evento->fecha = $request->get('fecha');
        $evento->paquete_id = $request->get('paquete_id');
        $evento->save();
        return  Redirect::to('paquete');
        
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $datos =Package::find($id);
        return view("contenido_principal.form_createEvent",['datos'=>$datos]);
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
