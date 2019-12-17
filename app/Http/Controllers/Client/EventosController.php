<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
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
            'url_imagen_principal' => 'required',
            'hora'=>'required',
            'fecha'=>'required',
            'paquete_id'=>'required',
        ]);
        if($request->get('fecha')>=now()){
        
        $evento = new Event;
        $evento->nombre = $request->get('nombre');
        $evento->descripcion = $request->get('descripcion');
        $evento->numero_invitados = $request->get('numero_invitados');
        $evento->url_imagen_principal = $request->get('url_imagen_principal');
        $evento->confirmado = 0;
        $evento->activo = 1;
        $evento->hora = $request->get('hora');
        $evento->fecha = $request->get('fecha');
        $evento->paquete_id = $request->get('paquete_id');
        $evento->cliente_id = Auth::user()->id;
        $evento->anfitrion = Auth::user()->id;
        $evento->save();
        return  Redirect::to('eventos');
        }
        else{
            return back()->withErrors(['erroregistrofecha'=> trans('La fecha debe ser mayor a hoy.')]);
         }
        
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
        $event = Event::find($id);
        //$this->authorize('pass',$event);
        
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
        $event = Event::find($id);
        //$this->authorize('pass',$event);

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

        $event = Event::find($id);
        //$this->authorize('pass',$event);

        $credentials=$this->validate(request(),[
            'nombre' => 'required|string',
            'descripcion'=>'required',
            'numero_invitados'=>'required',
            'hora'=>'required',
            'fecha'=>'required',
            'paquete_id'=>'required',
        ]);
        if($request->get('fecha')>=now()){
       if( $request->file('url_imagen_principal')){ 
        
        $credentials=$this->validate(request(),[
            'url_imagen_principal' => 'required|mimes:jpg,jpeg,png|max:1000',
        ]);
        $path = Storage::disk('public')->put('imgupload/galerias', $request->file('url_imagen_principal'));
        $imagen=asset($path);

        $evento = Event::findOrFail($id);;
        $evento->nombre = $request->get('nombre');
        $evento->descripcion = $request->get('descripcion');
        $evento->numero_invitados = $request->get('numero_invitados');
        $evento->url_imagen_principal = $imagen;
        $evento->confirmado = 0;
        $evento->activo = 1;
        $evento->hora = $request->get('hora');
        $evento->fecha = $request->get('fecha');
        $evento->paquete_id = $request->get('paquete_id');
        $evento->cliente_id = Auth::user()->id;
        $evento->anfitrion = Auth::user()->id;
        $evento->update();
        return  Redirect::to('eventos');
    }
    else{
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
    }
    else{
        return back()->withErrors(['erroregistrofecha'=> trans('La fecha debe ser mayor a hoy.')]);
     }
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
        
        if (empty($fotos)==true){
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
