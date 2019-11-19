@extends ('layouts.master_cliente')

@section ('content')

<!-- PAGE TITLE -->
<div class="page-title">
    <h2><span class="fa fa-arrow-circle-o-left"></span> Listado de Eventos</h2>
</div>
{!! $errors->first('erroregistro','
<div class="alert alert-danger">
    <strong>No se puede eliminar!</strong>
</div>
')!!}
<div class="row">
    <div class="col-md-12">
        <!-- START DEFAULT DATATABLE -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Eventos</h3>
            </div>
            <div class="panel-body">
                <table class="table datatable">
                    <thead>
                        <tr>
                            <th>Nombre del Evento</th>
                            <th>Fecha</th>
                            <th>Hora</th>
                            <th>Descripción</th>
                            <th>Número de invitados</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                     @foreach ($datos as $item)
                        <tr>
                        <td>{{$item->nombre}}</td>
                            <td>{{$item->fecha}}</td>
                            <td>{{$item->hora}}</td>
                            <td>{{$item->descripcion}}</td>
                            <td>{{$item->numero_invitados}}</td>
                            <td>@if($item->confirmado == '1') confirmado
                                @else No confirmado
                                @endif
                            
                            </td>
                            <td>
                            <a href="{{ url('eventos/galeria/'.$item->id.'')}}"><button
                                        class="btn btn-warning"><i class="fa fa-picture-o"></i></button></a>
                         @if($item->confirmado == '0')
                            <a href="{{ URL::action('Client\EventosController@edit',$item->id)}}"><button
                                    class="btn btn-warning"><i class="fa fa-edit"></i></button></a>
                        @endif
                                <a href="{{ url('eventos/show/'.$item->id.'')}}"><button
                                        class="btn btn-info"><i class="fa fa-eye"></i></button></a>
                            @if($item->confirmado == '0')
                                <a href="" class="profile-control-right" data-target="#message-box-danger-{{$item->id}}"
                                    data-toggle="modal"><button class="btn btn-danger"><i
                                            class="fa fa-trash-o"></i></button></a>
                            
                            @endif
                            </td>
                            @include('contenido_principal.cliente_eventos.delete')
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END DEFAULT DATATABLE -->

    </div>
</div>
@endsection