@extends ('layouts.master_cliente')

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
        <a class="gallery-item" href="" title="Imagen" data-gallery>
            <div class="image">
                <img src="{{asset($datos->url_imagen_principal	)}}" alt="" />
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
                    <p>@if($datos->confirmado == '1') confirmado
                            @else No confirmado
                            @endif
                    </p>
                </div>
            </div>
            <div>
                <div>
                    <h3 class="panel-title"><strong>Número de Invitados:</strong> </h3>
                </div>
                <div class="panel-body">
                <p>{{$datos->numero_invitados}}</p>

                </div>
            </div>
            <div>
                    <div>
                        <h3 class="panel-title"><strong> Paquete:</strong> </h3>
                    </div>
                    <div class="panel-body">
                    <p>{{$dato->nombre}}</p>
    
                    </div>
                </div>

        </div>
        
        

    </div>
    <div class="row">
            <h3>GALERIA DEL EVENTO:</h3>
        <div class="gallery" id="links">
            @foreach($fotos as $item)
            <a class="gallery-item" href="{{asset($item->url)}}" data-gallery>
                <div class="image">
                    <img src="{{asset($item->url)}} "  />
                </div>
                <div class="meta">
                    <strong>Imagen</strong>
                </div>
            </a>
            @endforeach
        </div>
    </div>
    <br>
    @endsection