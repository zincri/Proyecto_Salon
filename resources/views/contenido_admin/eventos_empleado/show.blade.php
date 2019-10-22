@extends('layouts.master_empleado')

@section('content')
<div class="panel-body">


    {!! $errors->first('erroregistro','
    <div class="alert alert-danger">
        <strong>Warning!</strong>Ocurrio un error, intentelo nuevamente por favor!
    </div>
    ')!!}
    <h2>Evento Ejemplo</h2>
    <hr>
    <div class="gallery" id="links">
        <a class="gallery-item" href="{{asset('img/eventos/evento.jpg')}}" title="Imagen" data-gallery>
            <div class="image">
                <img src="{{asset('img/eventos/evento.jpg')}}" alt="Imagen" />
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
                    <p>Descripcion del evento.</p>

                </div>
            </div>
        </div>


        <div class="col-md-6">
            <div>
                <div>
                    <h3 class="panel-title"><strong>Estado del evento: </strong> </h3>
                </div>
                <div class="panel-body">
                    <p>Confirmado</p>

                </div>
            </div>
            <div>
                <div>
                    <h3 class="panel-title"><strong>Invitados:</strong> </h3>
                </div>
                <div class="panel-body">
                    <p>488 asistieron</p>

                </div>
            </div>

        </div>
        
        

    </div>
    <div class="row">
            <h3>GALERIA DEL EVENTO:</h3>
        <div class="gallery" id="links">
            @foreach($galeria as $item)
            <a class="gallery-item" href="{{asset('img/eventos/evento.jpg')}}" title="Imagen" data-gallery>
                <div class="image">
                    <img src="{{asset('img/eventos/evento.jpg')}}" alt="Imagen" />
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
        <a href="{{URL::action('Admin\EventosController@edit',44)}}"><button
                class="btn btn-primary pull-right">Confirmar Evento</button></a>
    </div>
    <br>
    @endsection