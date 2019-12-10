@extends ('layouts.master_cliente')

@section ('content')
{!!Form::open(array('action'=>['Client\EventosController@update',$datos->id],'method'=>'PATCH','autocomplete'=>'off','files'
=> 'true'))!!}
{{Form::token()}}

<div class="form-horizontal">
    <div class="panel panel-default">


        <div class="panel-body">

            <div class="form-group {{$errors->has('nombre') ? 'has-error':''}}">
                <label class="col-md-3 col-xs-12 control-label">Nombre del Evento</label>
                <div class="col-md-6 col-xs-12">
                    <div class="input-group">
                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                        <input type="text" class="form-control" name="nombre" value="{{$datos->nombre}}" />
                    </div>
                    {!! $errors->first('nombre','<span class="help-block">:message</span>')!!}

                </div>
            </div>

            <div class="form-group {{$errors->has('descripcion') ? 'has-error':''}}">
                <label class="col-md-3 col-xs-12 control-label">Descripción</label>
                <div class="col-md-6 col-xs-12">
                    <div class="input-group">
                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                        <input type="text" class="form-control" name="descripcion" value="{{$datos->descripcion}}" />
                    </div>
                    {!! $errors->first('descripcion','<span class="help-block">:message</span>')!!}

                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 col-xs-12 control-label">Fecha</label>
                <div class="col-md-5 col-xs-12">
                    <div class="input-group">
                        <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                        <input type="text" class="form-control datepicker" value="{{$datos->fecha}}"
                            data-date="06-06-2014" data-date-format="dd-mm-yyyy" data-date-viewmode="years"
                            name="fecha">

                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label">Hora</label>
                <div class="col-md-5">
                    <div class="input-group bootstrap-timepicker">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                        <input type="text" class="form-control timepicker" name="hora" value="{{$datos->hora}}" />

                    </div>
                </div>
            </div>
        </div>

        <div class="form-group {{$errors->has('paquete_id') ? 'has-error':''}}">
            <label class="col-md-3 col-xs-12 control-label">Paquete</label>
            <div class="col-md-6 col-xs-12">
                <select class="form-control" name="paquete_id">
                    @foreach ($opcion as $item)
                    @if($datos->paquete_id == $item->id)
                    <option value="{{$item->id}}" selected>{{$item->nombre}}</option>
                    @else
                    <option value="{{$item->id}}">{{$item->nombre}}</option>
                    @endif
                    @endforeach
                </select>
                {!! $errors->first('paquete_id','<span class="help-block">:message</span>')!!}
            </div>
        </div>

        <div class="form-group {{$errors->has('numero_invitados') ? 'has-error':''}}">
            <label class="col-md-3 col-xs-12 control-label">Número de Invitados</label>
            <div class="col-md-6 col-xs-12">
                <div class="input-group">
                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                    <input type="text" class="form-control" name="numero_invitados"
                        value="{{$datos->numero_invitados}}" />
                </div>
                {!! $errors->first('numero_invitados','<span class="help-block">:message</span>')!!}

            </div>
        </div>
        <div class="form-group {{$errors->has('url_imagen_principal') ? 'has-error':''}}">
            <label class="col-md-3 col-xs-12 control-label">Imagen Principal</label>
            <div class="col-md-6 col-xs-12">
                <div class="form-group">
                    <div class="col-md-12">
                        <input type="file" name="url_imagen_principal" id="url_imagen_principal" class="file"
                            accept="image/*" data-preview-file-type="any" />
                        {!! $errors->first('url_imagen_principal','<span class="help-block">:message</span>')!!}
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-footer">
            <button class="btn btn-primary pull-right" type="submit">Guardar</button>
        </div>
    </div>
</div>
{!!Form::close()!!}

@endsection