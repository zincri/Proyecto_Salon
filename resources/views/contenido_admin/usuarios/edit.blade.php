@extends ('layouts.master_admin')

@section ('content')
{!!Form::open(array('action'=>['Admin\UsuariosController@update',$datos->id],'method'=>'PATCH','autocomplete'=>'off'))!!}
{{Form::token()}}

                <div class="form-horizontal">
                <div class="panel panel-default">
                                
                               
                                <div class="panel-body">                                                                        

                                <div class="form-group {{$errors->has('nombre') ? 'has-error':''}}">
                                        <label class="col-md-3 col-xs-12 control-label">Nombre</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" class="form-control" name="nombre" value="{{$datos->name}}"/>
                                            </div>                                            
                                            {!! $errors->first('nombre','<span class="help-block">:message</span>')!!}
                                            
                                        </div>
                                </div>

                                <div class="form-group {{$errors->has('apellido_paterno') ? 'has-error':''}}">
                                    <label class="col-md-3 col-xs-12 control-label">Apellido Paterno</label>
                                    <div class="col-md-6 col-xs-12">                                            
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                            <input type="text" class="form-control" name="apellido_paterno" value="{{$datos->apellido_paterno}}"/>
                                        </div>                                            
                                        {!! $errors->first('apellido_paterno','<span class="help-block">:message</span>')!!}
                                        
                                    </div>
                                </div>

                                <div class="form-group {{$errors->has('apellido_materno') ? 'has-error':''}}">
                                    <label class="col-md-3 col-xs-12 control-label">Apellido Materno</label>
                                    <div class="col-md-6 col-xs-12">                                            
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                            <input type="text" class="form-control" name="apellido_materno" value="{{$datos->apellido_materno}}"/>
                                        </div>                                            
                                        {!! $errors->first('apellido_materno','<span class="help-block">:message</span>')!!}
                                        
                                    </div>
                                </div>

                                <div class="form-group {{$errors->has('edad') ? 'has-error':''}}">
                                    <label class="col-md-3 col-xs-12 control-label">Edad</label>
                                    <div class="col-md-6 col-xs-12">                                            
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                            <input type="text" class="form-control" name="edad" value="{{$datos->edad}}"/>
                                        </div>                                            
                                        {!! $errors->first('edad','<span class="help-block">:message</span>')!!}
                                        
                                    </div>
                                </div>

                                <div class="form-group {{$errors->has('rol') ? 'has-error':''}}">
                                    <label class="col-md-3 col-xs-12 control-label">Rol del Usuario</label>
                                    <div class="col-md-6 col-xs-12">                                                                                            
                                        <select class="form-control" name="rol">
                                        @if($datos->rol == "client")
                                            <option value="client" selected>Cliente</option>
                                            <option value="employee">Empleado</option>
                                            <option value="manager">Gerente</option>
                                        @else
                                            @if ($datos->rol == "employee")
                                                <option value="client" >Cliente</option>
                                                <option value="employee" selected>Empleado</option>
                                                <option value="manager">Gerente</option>
                                            @else
                                                <option value="client" >Cliente</option>
                                                <option value="employee" >Empleado</option>
                                                <option value="manager" selected>Gerente</option>
                                            @endif
                                        @endif
                                        </select>
                                        {!! $errors->first('rol','<span class="help-block">:message</span>')!!}
                                    </div>
                                </div>

                                <div class="form-group {{$errors->has('telefono') ? 'has-error':''}}">
                                    <label class="col-md-3 col-xs-12 control-label">Telefono</label>
                                    <div class="col-md-6 col-xs-12">                                            
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                            <input type="text" class="form-control" name="telefono" value="{{$datos->telefono}}"/>
                                        </div>                                            
                                        {!! $errors->first('telefono','<span class="help-block">:message</span>')!!}
                                        
                                    </div>
                                </div>

                                <div class="form-group {{$errors->has('email') ? 'has-error':''}}">
                                        <label class="col-md-3 col-xs-12 control-label">Email</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" class="form-control" id="email" name="email" value="{{$datos->email}}"/>
                                            </div>                                            
                                            {!! $errors->first('email','<span class="help-block">:message</span>')!!}
                                            
                                        </div>
                                </div>


                                

              

                                <div class="panel-footer">                                   
                                    <button class="btn btn-primary pull-right" type="submit">Guardar</button>
                                </div>
                 </div>
                </div>
{!!Form::close()!!}	

@endsection