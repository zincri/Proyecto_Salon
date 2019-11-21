<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\Gallery;

class GaleriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $datos = Gallery::where('activo','=','1')->where('evento_id','=',$id)->get();
        return view('contenido_admin.galeria.index',['datos'=>$datos,'id'=>$id]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {

        return view('contenido_admin.galeria.create',['id'=>$id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        $credentials=$this->validate(request(),[
            'file' => 'required|mimes:jpg,jpeg,png|max:1000',
        ]);
        $path = Storage::disk('public')->put('imgupload/paquetes', $request->file('file'));
        $imagen=asset($path);

        $gallery = new Gallery;
        $gallery->evento_id = $id;
        $gallery->url = $imagen;
        $gallery->usuario_id = Auth::user()->id;
        $gallery->save();
        return Redirect::to('administrador/uploadimage/'.$id.'');
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
        $image=Gallery::find($id);
        if(Auth::user()->id==$image->usuario_id){
            $image->activo = 0;
            $image->update();
            return Redirect::to('administrador/eventos');
        }
        else{
            return back()->withErrors(['erroregistro'=> trans('Error.')]);
        }
    }
}
