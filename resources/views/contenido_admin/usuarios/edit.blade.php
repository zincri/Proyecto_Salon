<div class="message-box message-box-info animated fadeIn" id="message-box-info-{{$item->id}}">

    {!!Form::open(array('action'=>['Admin\UsuariosController@update',$item->id],'method'=>'PATCH','autocomplete'=>'off'))!!}
    {{Form::token()}}
    <div class="mb-container">
        <div class="mb-middle">
            <div class="mb-content">
                <div class="form-horizontal">
                    <div class="panel panel-default">


                        <div class="panel-body">


                            <div class="form-group {{$errors->has('nombre') ? 'has-error':''}}">
                                <label class="col-md-3 col-xs-12 control-label">Nombre</label>
                                <div class="col-md-6 col-xs-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                        <input type="text" class="form-control" name="nombre" value="{{$item->name}}" />
                                    </div>
                                    {!! $errors->first('nombre','<span class="help-block">:message</span>')!!}

                                </div>
                            </div>

                            <div class="form-group {{$errors->has('apellido_paterno') ? 'has-error':''}}">
                                <label class="col-md-3 col-xs-12 control-label">Apellido Paterno</label>
                                <div class="col-md-6 col-xs-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                        <input type="text" class="form-control" name="apellido_paterno"
                                            value="{{$item->apellido_paterno}}" />
                                    </div>
                                    {!! $errors->first('apellido_paterno','<span class="help-block">:message</span>')!!}

                                </div>
                            </div>

                            <div class="form-group {{$errors->has('apellido_materno') ? 'has-error':''}}">
                                <label class="col-md-3 col-xs-12 control-label">Apellido Materno</label>
                                <div class="col-md-6 col-xs-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                        <input type="text" class="form-control" name="apellido_materno"
                                            value="{{$item->apellido_materno}}" />
                                    </div>
                                    {!! $errors->first('apellido_materno','<span class="help-block">:message</span>')!!}

                                </div>
                            </div>

                            <div class="form-group {{$errors->has('edad') ? 'has-error':''}}">
                                <label class="col-md-3 col-xs-12 control-label">Edad</label>
                                <div class="col-md-6 col-xs-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                        <input type="text" class="form-control" name="edad" value="{{$item->edad}}" />
                                    </div>
                                    {!! $errors->first('edad','<span class="help-block">:message</span>')!!}

                                </div>
                            </div>

                            @if (Auth::user()->rol == "manager")



                            <div class="form-group {{$errors->has('rol') ? 'has-error':''}}">
                                <label class="col-md-3 col-xs-12 control-label">Rol del Usuario</label>
                                <div class="col-md-6 col-xs-12">
                                    <select class="form-control" name="rol">
                                        @if($item->rol == "client")
                                        <option value="client" selected>Cliente</option>
                                        <option value="employee">Empleado</option>
                                        <option value="manager">Gerente</option>
                                        @else
                                        @if ($item->rol == "employee")
                                        <option value="client">Cliente</option>
                                        <option value="employee" selected>Empleado</option>
                                        <option value="manager">Gerente</option>
                                        @else
                                        <option value="client">Cliente</option>
                                        <option value="employee">Empleado</option>
                                        <option value="manager" selected>Gerente</option>
                                        @endif
                                        @endif
                                    </select>
                                    {!! $errors->first('rol','<span class="help-block">:message</span>')!!}
                                </div>
                            </div>
                            @endif

                            <div class="form-group {{$errors->has('telefono') ? 'has-error':''}}">
                                <label class="col-md-3 col-xs-12 control-label">Telefono</label>
                                <div class="col-md-6 col-xs-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                        <input type="text" class="form-control" name="telefono"
                                            value="{{$item->telefono}}" />
                                    </div>
                                    {!! $errors->first('telefono','<span class="help-block">:message</span>')!!}

                                </div>
                            </div>

                            <div class="form-group {{$errors->has('email') ? 'has-error':''}}">
                                <label class="col-md-3 col-xs-12 control-label">Email</label>
                                <div class="col-md-6 col-xs-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                        <input type="text" class="form-control" id="email" name="email"
                                            value="{{$item->email}}" />
                                    </div>
                                    {!! $errors->first('email','<span class="help-block">:message</span>')!!}

                                </div>
                            </div>






                            <div class="mb-footer">
                                <button class="btn btn-primary btn-lg pull-right" type="submit">Guardar</button>
                                &nbsp;
                                <button class="btn btn-default btn-lg pull-right" type="button"
                                    data-dismiss="modal">Cancelar</button>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {!!Form::close()!!}
</div>