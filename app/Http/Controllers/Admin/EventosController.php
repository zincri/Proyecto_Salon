<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Organizer;
use App\Event;
use App\Gallery;
use App\Package;
use Illuminate\Support\Facades\Auth;

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
        $datos = Event::where('activo','=','1')->get();
        return view("contenido_admin.eventos.index",['datos'=>$datos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }
    /*
    public function crearabono($id)
    {
        return "entro";
    }
*/
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
            'descripcion' => 'required|string',
            'fecha'=>'required',
            'estado'=>'required',
            'numero_invitados'=>'required',
            'anfitrion'=>'required',

        ]);
        $event = new Event;
        $event->nombre = $request->nombre;
        $event->descripcion = $request->descripcion;
        $event->fecha = $request->fecha;
        if ($request->estado == "Confirmado"){
            $event->estado = 1;
        }
        else{
            $event->estado =0;
        }
        $event->numero_invitados = $request->numero_invitados;
        $event->anfitrion = $request->anfitrion;
        $event->url_imagen_principal = "img/eventos/evento.jpg";
        $event->save();
        return Redirect::to('administrador/eventos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $datos = Event::find($id);
        $galeria = Gallery::where('activo','=','1')->where('evento_id','=',$id)->get();
        
        return view("contenido_admin.eventos.show",['datos'=>$datos,'galeria'=>$galeria]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datos = Event::find($id);
        $paquete = Package::find($datos->paquete_id);
       
        return view('contenido_admin.eventos.edit',['id'=>$id,'paquete'=>$paquete]);
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
            'precio'=>'required|string|max:10',
        ]);
        $event = Event::findOrFail($id);
        $event->confirmado = 1;
        $event->precio = $request->precio;
        $event->contratador_id = Auth::user()->id;
        $event->update();
        return Redirect::to('administrador/eventos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //$event = Event::findOrFail($id);

        //$event->
        //return Redirect::to('administrador/eventos');
    }
}
