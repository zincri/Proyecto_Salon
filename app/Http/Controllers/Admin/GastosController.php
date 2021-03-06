<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Expense;
use Illuminate\Support\Facades\Auth;

class GastosController extends Controller
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
        $datos = Expense::where('activo', '=', '1')->get();
        return view("contenido_admin.gastos.index",['datos'=>$datos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("contenido_admin.gastos.create");
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
            'monto' => 'required|string',
            'concepto'=>'required',
            'causa'=>'required',
            'fecha'=>'required'
        ]);
        $gasto = new Expense($request->all());
        $gasto->activo=1;
        $gasto->gastador_id = Auth::user()->id;
        /*
        $gasto->nombre = $request->nombre;
        $gasto->monto = $request->monto;
        $gasto->concepto = $request->concepto;
        $gasto->causa = $request->causa;
        $gasto->fecha = $request->fecha;
        */
        $gasto->save();
        return Redirect::to('administrador/gastos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view("contenido_admin.gastos.show");
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
        return view("contenido_admin.gastos.edit",['datos'=>$datos]);
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
        return Redirect::to('administrador/gastos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gasto = Expense::findOrFail($id);
        $gasto->activo = 0;
        $gasto->update();
        return Redirect::to('administrador/gastos');
    }
}
