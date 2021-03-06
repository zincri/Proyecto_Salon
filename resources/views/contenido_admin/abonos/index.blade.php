@extends ('layouts.master_admin')

@section ('content')
<!-- PAGE TITLE -->
<div class="page-title">                    
    <h2><span class="fa fa-arrow-circle-o-left"></span> Listado de Abonos</h2>
</div>
<!-- END PAGE TITLE -->   
<div class="row">
    <div class="col-md-12">

        <!-- START DEFAULT DATATABLE -->
        <div class="panel panel-default">
            <div class="panel-heading">                                
                <h3 class="panel-title">Abonos</h3>
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
                            <th>Nombre del Evento del que pertenece el Abono</th>
                            <th>Fecha</th>
                            <th>Monto</th>
                            <th>Receptor</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datos as $item)
                        <tr>
                            <td>{{App\Event::find($item->evento_id)->nombre}}</td>
                            <td>{{$item->fecha}}</td>
                            <td>{{$item->monto}}</td>
                            <td>{{App\User::find($item->receptor_id)->name}}</td>
                            <td>
                                Sin acciones
                            </td>
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