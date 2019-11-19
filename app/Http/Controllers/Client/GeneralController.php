<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Package;

class GeneralController extends Controller
{
  
    public function index()
    {
        return view("contenido_usuario.inicio");
    }

    public function paquetes()
    {
        $datos = Package::where('activo', '=', '1')->get();
        return view("contenido_usuario.paquetes",['datos'=>$datos]);
    }

    public function contacto()
    {
        return view('contenido_usuario.contacto');
    }

 
}
