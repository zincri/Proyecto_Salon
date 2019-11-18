@extends ('layouts.master_cliente')

@section ('content')
<!-- PAGE TITLE -->
<div class="page-title">
    <h2><span class="fa fa-arrow-circle-o-left"></span> Listado de Eventos</h2>
</div>
<!-- END PAGE TITLE -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-md-4" style="float: right;">
                        <a href="{{ URL::action('EventosClienteController@create')}}"><button
                                class="btn btn-success btn-block"><span class="fa fa-plus"></span> Nuevo
                                Evento</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="row">


    <div class="col-md-12">
        <!-- START DEFAULT DATATABLE -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Eventos</h3>
                <ul class="panel-controls">
                    <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                    <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                    <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                </ul>
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
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datos as $item)
                        <tr>
                        <td>{{$item->nombre}}</td>
                            <td>{{$item->fecha}}</td>
                            <td></td>
                            <td>{{$item->estado}}</td>
                            <td>
                                <a href="{{URL::action('EventosClienteController@show',$item->id)}}"><button
                                        class="btn btn-info"><i class="fa fa-eye"></i></button></a>
                                &nbsp;

                                <a href="" class="profile-control-right" data-target="#message-box-danger-{{$item->id}}"
                                    data-toggle="modal"><button class="btn btn-danger"><i
                                            class="fa fa-trash-o"></i></button></a>
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