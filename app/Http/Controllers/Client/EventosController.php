<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\Package;
use App\Event;
use App\Gallery;

class EventosController extends Controller
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
        $datos = Package::where('activo', '=', '1')->get();
        return view("contenido_principal.paquetes",['datos'=>$datos]);
    }

    public function sesion()
    {
        return view('contenido_principal.inicio');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function view()
     {
        $usuario = Auth::user();
        $datos = Event::where('cliente_id', '=', $usuario->id)->where('activo','=','1')->get();
        return view("contenido_principal.cliente_eventos.index",['datos'=>$datos]);
     }
    public function create()
    {
        
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
        $evento->activo = 1;
        $evento->hora = $request->get('hora');
        $evento->fecha = $request->get('fecha');
        $evento->paquete_id = $request->get('paquete_id');
        $evento->cliente_id = Auth::user()->id;
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

    public function showEvent($id)
    {
        
        $datos =Event::find($id);
        $fotos =Gallery::where('evento_id','=',$id)->where('activo','=','1')->get();
        $dato =Package::find($datos->paquete_id);
        return view("contenido_principal.cliente_eventos.show",['datos'=>$datos,'fotos'=>$fotos,'dato'=>$dato]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $opcion = Package::all();
        $datos = Event::find($id);
        return view("contenido_principal.cliente_eventos.edit",['datos'=>$datos,'opcion'=>$opcion]);
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
        $credentials=$this->validate(request(),[
            'nombre' => 'required|string',
            'descripcion'=>'required',
            'numero_invitados'=>'required',
            'hora'=>'required',
            'fecha'=>'required',
            'paquete_id'=>'required',
        ]);
        
        $evento = Event::findOrFail($id);;
        $evento->nombre = $request->get('nombre');
        $evento->descripcion = $request->get('descripcion');
        $evento->numero_invitados = $request->get('numero_invitados');
        $evento->confirmado = 0;
        $evento->activo = 1;
        $evento->hora = $request->get('hora');
        $evento->fecha = $request->get('fecha');
        $evento->paquete_id = $request->get('paquete_id');
        $evento->cliente_id = Auth::user()->id;
        $evento->update();
        return  Redirect::to('eventos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fotos = Gallery::where('evento_id','=',$id)->where('activo','=','1')->get();
        if (!$fotos){
        $evento = Event::findOrFail($id);
        $evento->activo = 0;
        $evento->update();
        return Redirect::to('eventos');
        }
        else{
           return back()->withErrors(['erroregistro'=> trans('El evento no se puede eliminar ya que contiene fotos')]);
        }
    }
}
