@extends ('layouts.master_admin')

@section ('content')
{!!Form::open(array('action'=>['Admin\EventosController@update',$id],'method'=>'PATCH','autocomplete'=>'off',
'files' => 'true'))!!}
{{Form::token()}}

<div class="form-horizontal">
    <div class="panel panel-default">


        <div class="panel-body">

                <div class="row">
                        <div class="col-md-12">
                            <div>
                                <div>
                                    <h3 class="panel-title"><strong>Nombre del Paquete:</strong> {{$paquete->nombre}}</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                                <div>
                                    <div>
                                        <h3 class="panel-title"><strong>Precio Sugerido:</strong> {{$paquete->precio}}</h3>
                                    </div>
                                </div>
                            </div>

            <div class="form-group {{$errors->has('precio') ? 'has-error':''}}">
                <label class="col-md-3 col-xs-12 control-label">Precio del Evento</label>
                <div class="col-md-6 col-xs-12">
                    <div class="input-group">
                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                        <input type="text" class="form-control" name="precio" value="{{$paquete->precio}}" />
                    </div>
                    {!! $errors->first('nompreciobre','<span class="help-block">:message</span>')!!}

                </div>
            </div>

            <div class="panel-footer">
                <button class="btn btn-primary pull-right" type="submit">Confirmar Evento</button>
            </div>
        </div>
    </div>
{!!Form::close()!!}

@endsection