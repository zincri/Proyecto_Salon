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
        <a class="gallery-item" href="{{$datos->url_imagen_principal}}" title="Imagen" data-gallery>
            <div class="image">
                <img src="{{$datos->url_imagen_principal}}" alt="Imagen" />
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
                    <h3 class="panel-title"><strong>Estado del evento: </strong> </h3>
                </div>
                <div class="panel-body">
                    @if ($datos->confirmado == 1)
                        <p>Confirmado</p>
                    @else
                        <p>No Confirmado</p>
                    @endif
                </div>
            </div>
            <div>
                <div>
                    <h3 class="panel-title"><strong>Invitados:</strong> </h3>
                </div>
                <div class="panel-body">
                    <p>{{$datos->numero_invitados}} asistieron</p>

                </div>
            </div>

        </div>
        
        

    </div>
    <div class="row">
            <h3>GALERIA DEL EVENTO:</h3>
        <div class="gallery" id="links">
            @foreach($galeria as $item)
            <a class="gallery-item" href="{{$item->url}}" title="Imagen" data-gallery>
                <div class="image">
                    <img src="{{$item->url}}" alt="Imagen" />
                    <ul class="gallery-item-controls">
                        <li><label class="check"><input type="checkbox" class="icheckbox" /></label></li>
                        <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                    </ul>
                </div>
                <div class="meta">
                    <strong>Imagen</strong>
                </div>
            </a>
            @endforeach
        </div>
    </div>


    <div class="panel-footer">
        @if ($datos->confirmado == 0)
        <a href="{{URL::action('Admin\EventosController@edit',$datos->id)}}"><button
            class="btn btn-primary pull-right">Confirmar Evento</button></a>    
        @endif
        
    </div>
    <br>
    @endsection