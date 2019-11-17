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
        <a class="gallery-item" href="{{asset('img/eventos/evento.jpg')}}" title="Imagen" data-gallery>
            <div class="image">
                <img src="{{asset('img/eventos/evento.jpg')}}" alt="Imagen" />
                <ul class="gallery-item-controls">
                    <li><label class="check"><input type="checkbox" class="icheckbox" /></label></li>
                    <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                </ul>
            </div>
            <div class="meta">
                <strong>Imagen Perfil</strong>
            </div>
        </a>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div>
                <div>
                    <h3 class="panel-title"><strong>Apellidos:</strong> </h3>
                </div>
                <div class="panel-body">
                    <p>{{$datos->apellido_paterno.$datos->apellido_materno}}</p>

                </div>
            </div>
        </div>


        <div class="col-md-6">
            <div>
                <div>
                    <h3 class="panel-title"><strong>Edad: </strong> </h3>
                </div>
                <div class="panel-body">
                    <p>{{$datos->edad}}</p>

                </div>
            </div>
            <div>
                <div>
                    <h3 class="panel-title"><strong>Eventos Organizados:</strong> </h3>
                </div>
                <div class="panel-body">
                    @forelse ($datos->event as $item)
                    <p>{{$item->nombre}}</p>
                    @empty
                    <p>No ha realizado eventos</p>    
                    @endforelse
                    
                </div>
            </div>

        </div>
        
        

    </div>
    


    <div class="panel-footer">
        <a href="{{URL::action('Admin\ClientesOrganizadoresController@edit',$datos->id)}}"><button
                class="btn btn-primary pull-right">Confirmar Evento</button></a>
    </div>
    <br>
    @endsection