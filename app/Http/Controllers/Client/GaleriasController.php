<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Gallery;

class GaleriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $gallery = Gallery::find($id);
        $this->authorize('pass',$gallery);

        $datos = Gallery::where('evento_id', '=', $id)->where('activo','=','1')->get();
        return view("contenido_principal.cliente_galeria.galeria",['datos'=>$datos,'id'=>$id]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {

        return view("contenido_principal.cliente_galeria.create",['id'=>$id]);
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
            'evento_id' => 'required',
            'url' => 'required|mimes:jpg,jpeg,png|max:1000',
        ]);
        $path = Storage::disk('public')->put('imgupload/galerias', $request->file('url'));
        $imagen=asset($path);

        $foto = new Gallery;
        $foto->evento_id = $request->get('evento_id');
        $foto->url = $imagen;
        $foto->activo = '1';
        $foto->usuario_id = Auth::user()->id;
        $foto->save();
        return  Redirect::to('eventos/galeria/'.$foto->evento_id.'');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $gallery = Gallery::find($id);
        $this->authorize('pass',$gallery);
        
        $foto = Gallery::findOrFail($id);
        $foto->activo = 0;
        $foto->update();
        return Redirect::to('galeria/');
        
    }
}
