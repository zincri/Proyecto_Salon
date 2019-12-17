@extends ('layouts.master_admin')

@section ('content')
<!-- PAGE TITLE -->
<div class="page-title">
    <h2><span class="fa fa-users"></span> Lista de Usuarios <small>4 usuarios</small></h2>
</div>
<!-- END PAGE TITLE -->

<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">

    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-default">
                <div class="panel-body">
                    <p>Usa la barra buscadora para encontrar a los usuarios.</p>
                    <div class="col-md-8">
                    <form class="form-horizontal">
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <span class="fa fa-search"></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="A quien estas buscando?"/>
                                    <div class="input-group-btn">
                                        <button class="btn btn-primary">Search</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    </div>
                    <div class="col-md-4">
                            <a href="" data-target="#message-box-success-create" data-toggle="modal"><button class="btn btn-success btn-block"><span class="fa fa-plus"></span> Nuevo usuario</button></a>
                    </div>
                    @include('contenido_admin.usuarios.create')
                </div>

            </div>

        </div>
    </div>

    <div class="row">
        @foreach ($datos as $item)
        <div class="col-md-3">
            <!-- CONTACT ITEM -->
            <div class="panel panel-default">
                <div class="panel-body profile">
                    <div class="profile-image">
                        <a href="{{ URL::action('Admin\UsuariosController@show',$item->id)}}"><img src="{{asset('assets/images/users/user3.jpg')}}" alt="Nadia Ali"/></a>
                    </div>
                    <div class="profile-data">
                        <div class="profile-data-name">{{$item->name}}</div>
                        <div class="profile-data-title">{{$item->rol}}</div>
                    </div>
                    <div class="profile-controls">
                        <a href="" class="profile-control-left" data-target="#message-box-info-{{$item->id}}" data-toggle="modal"><span class="fa fa-edit"></span></a>


                        <a href="" class="profile-control-right" data-target="#message-box-danger-{{$item->id}}" data-toggle="modal"><span class="fa fa-trash-o"></span></a>

                    </div>
                    @include('contenido_admin.usuarios.edit')
                    @include('contenido_admin.usuarios.delete')

                </div>
                <div class="panel-body">
                    <div class="contact-info">
                        <p><small>Telefono</small><br/>{{$item->telefono}}</p>
                        <p><small>Email</small><br/>{{$item->email}}</p>
                        @if (Auth::user()->rol=="manager")
                        <a href="" data-target="#message-box-info-reset-{{$item->id}}" data-toggle="modal"><p><small>Restablecer contraseña</small><br/></p></a>
                        @include('contenido_admin.usuarios.resetear_pass_user')
                        @endif
                    </div>
                </div>
            </div>
            <!-- END CONTACT ITEM -->
        </div>
        @endforeach
    </div>

</div>
<!-- END PAGE CONTENT WRAPPER -->
@endsection
@section('scripts')

<script>
//$(document).ready(function() {

    var csrftoken = jQuery("[name=csrfmiddlewaretoken]").val();
   //$("#form").submit(function(request) {
/* 
    fetch("http://proyecto.test/administrador/usuariosall")
    .then(function(response) {
                            //alert(response);
                            return response.json();
                    }).then(function(data) {
                            console.log("Dato:", data);

                            for (let item of data) {

                                let content = 
                                
                                "<div class='col-md-3'>"
                                    +"<div class='panel panel-default'>"
                                        +"<div class='panel-body profile'>"
                                        +"<div class='profile-image'>"
                                                +"<a href='{{ URL::action('Admin\UsuariosController@show',"+item.id+")}}'><img src='{{asset('assets/images/users/user3.jpg')}}' alt='Nadia Ali'/></a>"
                                            +"</div>"
                                            +"<div class='profile-data'>"
                                                +"<div class='profile-data-name'>"+item.name+"</div>"
                                                +"<div class='profile-data-title'>"+item.rol+"</div>"
                                            +"</div>"
                                            +"<div class='profile-controls'>"
                                                +"<a href='' class='profile-control-left' data-target='#message-box-info-"+item.id+"' data-toggle='modal'><span class='fa fa-edit'></span></a>"
                                                
                                                +"<a href='' class='profile-control-right' data-target='#message-box-danger-"+item.id+"' data-toggle='modal'><span class='fa fa-trash-o'></span></a>"
                                                
                                            +"</div>"
                                        +"</div>"
                                        +"<div class='panel-body'>"
                                            +"<div class='contact-info'>"
                                                +"<p><small>Telefono</small><br/>"+item.telefono+"</p>"
                                                +"<p><small>Email</small><br/>"+item.email+"</p>"
                                                +"@if (Auth::user()->rol=='manager')"
                                                +"<a href='' data-target='#message-box-info-reset-"+item.id+"' data-toggle='modal'><p><small>Restablecer contraseña</small><br/></p></a>"
                                                
                                                +"@endif"
                                            +"</div>"
                                        +"</div>"
                                    +"</div>"
                                +"</div>"

                                $('#usuarios').append(content);
                            }
                       

                    }).catch(function(ex) {
                            console.log("Catch con:", ex);
                            //alert(ex);
                    });  */
    function enviarDatos() {
        console.log("entro");
        let nombre = document.form.nombre.value;
        let apellido_paterno = document.form.apellido_paterno.value;
        let apellido_materno = document.form.apellido_materno.value;
        let edad = document.form.edad.value;
        let rol = document.form.rol.value;
        let telefono = document.form.telefono.value;
        let email = document.form.email.value;
        let password = document.form.password.value;
        let password_confirmation = document.form.password_confirmation.value;
        fetch("http://proyecto.test/administrador/usuarios", {
                    method: 'POST',
                    credentials: "same-origin",
                    headers:{
                      'X-CSRFToken': csrftoken,
                      'Accept': 'application/json',
                      'Content-Type': 'application/json',
                      'X-Requested-With': 'XMLHttpRequest'
                    },
                    body: JSON.stringify({
                    "_token": "{{ csrf_token() }}",
                    'nombre':nombre,
                    'apellido_paterno':apellido_paterno,
                    'apellido_materno':apellido_materno,
                    'edad':edad,
                    'rol':rol,
                    'telefono':telefono,
                    'email':email,
                    'password':password,
                    'password_confirmation':password_confirmation
                    })
                
                    }).then(function(response) {
                            //alert(response);
                            return response.json();
                    }).then(function(data) {
                            console.log("Dato:", data);
                            //alert(data);
                    }).catch(function(ex) {
                            console.log("Catch con:", ex);
                            //alert(ex);
                    });
    }
//});
    
//});
</script>
@endsection
