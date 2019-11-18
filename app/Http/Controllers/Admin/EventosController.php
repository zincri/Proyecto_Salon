<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Organizer;
use App\Event;

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
        $datos = Event::all();
        return view("contenido_admin.eventos.index",['datos'=>$datos]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $combo=Organizer::all();
        return view("contenido_admin.eventos.create",['combo'=>$combo]);
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
        $galeria = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
        return view("contenido_admin.eventos.show",['galeria'=>$galeria]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return Redirect::to('administrador/eventos');
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
        return Redirect::to('administrador/eventos');
    }
}
