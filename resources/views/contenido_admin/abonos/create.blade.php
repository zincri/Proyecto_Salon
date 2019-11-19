@extends ('layouts.master_admin')

@section ('content')
{!!Form::open(array('action'=>['Admin\AbonosController@update',$id],'method'=>'PATCH','autocomplete'=>'off',
'files' => 'true'))!!}
{{Form::token()}}

<div class="form-horizontal">
    <div class="panel panel-default">


        <div class="panel-body">

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

            <div class="form-group {{$errors->has('monto') ? 'has-error':''}}">
                <label class="col-md-3 col-xs-12 control-label">Monto del abono</label>
                <div class="col-md-6 col-xs-12">
                    <div class="input-group">
                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                        <input type="text" class="form-control" name="monto" value="{{old('monto')}}" />
                    </div>
                    {!! $errors->first('monto','<span class="help-block">:message</span>')!!}

                </div>
            </div>

            <div class="panel-footer">
                <button class="btn btn-primary pull-right" type="submit">Agregar abono</button>
            </div>
        </div>
    </div>
{!!Form::close()!!}

@endsection