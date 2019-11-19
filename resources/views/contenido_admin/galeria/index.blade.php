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
                <h3 class="panel-title">Galeria</h3>
                <ul class="panel-controls">
                    <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                    <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                    <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                </ul>                                
            </div>
            {!! $errors->first('erroregistro','
            <div class="alert alert-danger">
                <strong>No se puede eliminar, no eres el propietario de la imagen!</strong>
            </div>
            ')!!}
            <div class="panel-body">
                <table class="table datatable">
                    <thead>
                        <tr>
                            <th>Imagen</th>
                            <th>Quien subió</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datos as $item)
                        <tr>
                            <td>
                                <img src="{{$item->url}}" alt="imagen" height="42" width="42">
                            </td>
                            <td>{{App\User::find($item->usuario_id)->name}}</td>
                            <td>
                                <a href="" class="profile-control-right" data-target="#message-box-danger-{{$item->id}}" data-toggle="modal"><button
                                    class="btn btn-danger"><i class="fa fa-trash-o"></i></button></a>
                            </td>
                            @include('contenido_admin.galeria.delete')
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