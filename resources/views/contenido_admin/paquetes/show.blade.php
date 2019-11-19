@extends('layouts.master_admin')

@section('content')
<div class="panel-body">


    {!! $errors->first('erroregistro','
    <div class="alert alert-danger">
        <strong>Warning!</strong>Ocurrio un error, intentelo nuevamente por favor!
    </div>
    ')!!}
    <h2>{{$datos->nombre}}</h2>
    <hr>
    <div class="gallery" id="links">
        <a class="gallery-item" href="{{$datos->foto_principal}}" title="Imagen" data-gallery>
            <div class="image">
                <img src="{{$datos->foto_principal}}" alt="Imagen" />
                <ul class="gallery-item-controls">
                    <li><label class="check"><input type="checkbox" class="icheckbox" /></label></li>
                    <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                </ul>
            </div>
            <div class="meta">
                <strong>Imagen principal</strong>
            </div>
        </a>
    </div>

    <div class="gallery" id="links">
            <a class="gallery-item" href="{{$datos->foto_secundaria}}" title="Imagen" data-gallery>
                <div class="image">
                    <img src="{{$datos->foto_secundaria}}" alt="Imagen" />
                    <ul class="gallery-item-controls">
                        <li><label class="check"><input type="checkbox" class="icheckbox" /></label></li>
                        <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                    </ul>
                </div>
                <div class="meta">
                    <strong>Imagen Secundaria</strong>
                </div>
            </a>
        </div>

    <div class="row">
        <div class="col-md-12">
            <div>
                <div>
                    <h3 class="panel-title"><strong>Descripcion:</strong> </h3>
                </div>
                <div class="panel-body">
                    <p>{{$datos->descripcion}}</p>

                </div>
            </div>
        </div>


        <div class="col-md-6">
            <div>
                <div>
                    <h3 class="panel-title"><strong>Estado del Paquete: </strong> </h3>
                </div>
                <div class="panel-body">
                    @if ($datos->activo == 1)
                        <p>Activo</p>
                    @else
                        <p>Inactivo</p>
                    @endif
                </div>
            </div>
            <div>
                <div>
                    <h3 class="panel-title"><strong>Precio:</strong> </h3>
                </div>
                <div class="panel-body">
                    <p>{{$datos->precio}}</p>

                </div>
            </div>

        </div>
        
        

    </div>
@endsection