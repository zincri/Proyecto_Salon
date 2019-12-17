@extends ('layouts.master_admin')

@section ('content')
{!!Form::open(array('url'=>'administrador/gastos','method'=>'POST','autocomplete'=>'off', 'files' => 'true'))!!}
{{Form::token()}}

<div class="form-horizontal">
    <div class="panel panel-default">


        <div class="panel-body">

            <div class="form-group {{$errors->has('nombre') ? 'has-error':''}}">
                <label class="col-md-3 col-xs-12 control-label">Nombre del Gasto</label>
                <div class="col-md-6 col-xs-12">
                    <div class="input-group">
                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                        <input type="text" class="form-control" name="nombre" />
                    </div>
                    {!! $errors->first('nombre','<span class="help-block">:message</span>')!!}

                </div>
            </div>

            <div class="form-group {{$errors->has('monto') ? 'has-error':''}}">
                <label class="col-md-3 col-xs-12 control-label">Monto</label>
                <div class="col-md-6 col-xs-12">
                    <div class="input-group">
                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                        <input type="text" class="form-control" name="monto" />
                    </div>
                    {!! $errors->first('monto','<span class="help-block">:message</span>')!!}

                </div>
            </div>

            <div class="form-group {{$errors->has('concepto') ? 'has-error':''}}">
                <label class="col-md-3 col-xs-12 control-label">Concepto</label>
                <div class="col-md-6 col-xs-12">
                    <div class="input-group">
                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                        <input type="text" class="form-control" name="concepto" />
                    </div>
                    {!! $errors->first('concepto','<span class="help-block">:message</span>')!!}

                </div>
            </div>
            <div class="form-group {{$errors->has('causa') ? 'has-error':''}}">
                <label class="col-md-3 col-xs-12 control-label">Causa</label>
                <div class="col-md-6 col-xs-12">
                    <div class="input-group">
                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                        <input type="text" class="form-control" name="causa" />
                    </div>
                    {!! $errors->first('causa','<span class="help-block">:message</span>')!!}

                </div>
            </div>

            <div class="form-group {{$errors->has('descripcion') ? 'has-error':''}}">
                <label class="col-md-3 col-xs-12 control-label">Descripcion</label>
                <div class="col-md-6 col-xs-12">
                    <div class="input-group">
                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                        <input type="text" class="form-control" name="descripcion" />
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



            <div class="panel-footer">
                <button class="btn btn-primary pull-right" type="submit">Guardar</button>
            </div>
        </div>
    </div>
</div>
    {!!Form::close()!!}

    @endsection