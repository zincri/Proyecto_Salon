@extends ('layouts.master_cliente')

@section ('content')
{!!Form::open(array('url'=>'clientes/eventos','method'=>'POST','autocomplete'=>'off', 'files' => 'false'))!!}
{{Form::token()}}

<div class="form-horizontal">
    <div class="panel panel-default">


        <div class="panel-body">

            <div class="form-group {{$errors->has('nombre') ? 'has-error':''}}">
                <label class="col-md-3 col-xs-12 control-label">Nombre del Evento</label>
                <div class="col-md-6 col-xs-12">
                    <div class="input-group">
                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                    <input type="text" class="form-control" name="nombre" value="{{old('nombre')}}"/>
                    </div>
                    {!! $errors->first('nombre','<span class="help-block">:message</span>')!!}

                </div>
            </div>


            <div class="form-group {{$errors->has('descripcion') ? 'has-error':''}}">
                <label class="col-md-3 col-xs-12 control-label">Descripcion</label>
                <div class="col-md-6 col-xs-12">
                    <div class="input-group">
                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                        <input type="text" class="form-control" name="descripcion" value="{{old('descripcion')}}" />
                    </div>
                    {!! $errors->first('descripcion','<span class="help-block">:message</span>')!!}

                </div>
            </div>

            <div class="form-group {{$errors->has('fecha') ? 'has-error':''}}">                                        
                <label class="col-md-3 col-xs-12 control-label">Fecha</label>
                <div class="col-md-6 col-xs-12">
                    <div class="input-group">
                        <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                        <input type="text" class="form-control datepicker" name="fecha" value="{{old('fecha')}}">                                            
                    </div>
                    {!! $errors->first('fecha','<span class="help-block">:message</span>')!!}
                </div>
            </div>

            <div class="form-group {{$errors->has('estado') ? 'has-error':''}}">
                <label class="col-md-3 col-xs-12 control-label">Estado</label>
                <div class="col-md-6 col-xs-12">
                    <div class="input-group">
                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                        <input type="text" class="form-control" name="estado" value="{{old('estado')}}" />
                    </div>
                    {!! $errors->first('estado','<span class="help-block">:message</span>')!!}

                </div>
            </div>

            <div class="form-group {{$errors->has('numero_invitados') ? 'has-error':''}}">
                <label class="col-md-3 col-xs-12 control-label">Numero de Invitados</label>
                <div class="col-md-6 col-xs-12">
                    <div class="input-group">
                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                        <input type="text" class="form-control" name="numero_invitados" value="{{old('numero_invitados')}}" />
                    </div>
                    {!! $errors->first('numero_invitados','<span class="help-block">:message</span>')!!}

                </div>
            </div>

            <div class="form-group {{$errors->has('evento') ? 'has-error':''}}">
                <label class="col-md-3 col-xs-12 control-label">Evento</label>
                <div class="col-md-6 col-xs-12">                                                                                            
                    <select class="form-control" name="anfitrion">
                    <option value=""> SELECCIONA EL EVENTO </option>
                        @foreach($datos as $item)
                            @if(old('evento') == $item->id)
                                <option value="{{$item->id}}" selected>{{$item->nombre}}</option>
                            @else
                                <option value="{{$item->id}}">{{$item->nombre}}</option>
                            @endif
                        @endforeach   
                    </select>
                    {!! $errors->first('anfitrion','<span class="help-block">:message</span>')!!}
                </div>
            </div>

            <div class="panel-footer">
                <button class="btn btn-primary pull-right" type="submit">Guardar</button>
            </div>
        </div>
    </div>
    {!!Form::close()!!}

    @endsection