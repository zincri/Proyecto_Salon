@extends ('layouts.master_cliente')

@section ('content')
<!-- PAGE TITLE -->
<div class="page-title">
    <h2><span class="fa fa-arrow-circle-o-left"></span>Galeria</h2>
</div>
<!-- END PAGE TITLE -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-md-4" style="float: right;">
                    <a href="{{url('eventos/galeria/create/'.$id.'')}}"><button
                                class="btn btn-success btn-block"><span class="fa fa-plus"></span> Subir Imagen</button></a>
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
                <h3 class="panel-title">Fotos</h3>
            </div>
            <div class="panel-body">
                <table class="table datatable">
                    <thead>
                        <tr>
                            <th>Imagen</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                     @foreach ($datos as $item)
                        <tr>
                        <td id="links">
                             <a class="gallery-item" href="{{asset ($item->url)}}" title="Nature Image 1" data-gallery>
                                <div class="image">                              
                                    <img src="{{asset ($item->url)}}" width="90" height="95" />                                                                    
                                </div>                                
                            </a>
                        </td>
                            <td>
                                <a href="" class="profile-control-right" data-target="#message-box-danger-{{$item->id}}"
                                    data-toggle="modal"><button class="btn btn-danger"><i
                                            class="fa fa-trash-o"></i></button></a>
                            </td>
                            @include('contenido_principal.cliente_galeria.delete')
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