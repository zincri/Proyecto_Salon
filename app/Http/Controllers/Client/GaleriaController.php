<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class GaleriaController extends Controller
{
    public function index()
    {
        $dato = array("j_img14.jpg","j_img15.jpg","j_img16.jpg");
        return view("contenido_principal.galeria",['dato'=>$dato]);
    }
       
}
