@extends('layouts.master_principal')

@section('content')
<div style="background-color:burlywood;">
<div class="page-content-wrap">
                
        <div class="row"> 
            <div class="col-md-12">
                <div class="panel panel-default" style="margin-top:150px; background-color:burlywood;"  >
                    <div class="panel-body">                                                                        
                        
                        <div class="row">
                            
                            <div class="col-md-6">
                                
                                    <div class="top-sing" style="margin-top:100px;">
                                            <div class="col-md-7 single-top">
                                                <div class="flexslider">
                                                    <ul class="slides">
                                                        <li data-thumb="{{asset ($datos->foto_principal)}}">
                                                            <div class="thumb-image"> <img src="{{ asset ($datos->foto_principal)}}" 
                                                                    data-imagezoom="true" class="img-responsive"> </div>
                                                        </li>
                                                    </ul>
                                                </div>
                            
                            
                                            </div>
                                        </div>
                                
                            </div>

                            <div class="col-md-6">
                                
                                    {!!Form::open(array('url'=>'paquete','method'=>'POST','autocomplete'=>'off'))!!}
                                    {{Form::token()}}
                        
                                    <input type="text" class="form-group" style="display:none" name="paquete_id" value="{{$datos->id}}" />
                                    <input type="text" class="form-group" style="display:none" name="url_imagen_principal"
                                        value="{{$datos->foto_principal}}" />
                        
                                    <div class="form-group" style="display:none">
                                        <label class="col-md-3 col-xs-12 control-label">Precio:</label>
                                        <label class="form-control">{{$datos->precio}}</label>
                                    </div>
                        
                                    <div class="form-group {{$errors->has('descripcion') ? 'has-error':''}}">
                                            <label class="col-md-3 col-xs-3 control-label">Descripcion del Paquete</label>
                                            <div class="col-md-9 col-xs-9">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                    <input type="text" class="form-control" name="descripcion" value="{{old('descripcion')}}"/>
                                                </div>                                            
                                                {!! $errors->first('descripcion','<span class="help-block">:message</span>')!!}
                                                
                                            </div>
                                    </div>
                        
                                    <div class="form-group {{$errors->has('nombre') ? 'has-error':''}}">
                                            <label class="col-md-3 col-xs-3 control-label">Nombre del Paquete</label>
                                            <div class="col-md-9 col-xs-9">                                            
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" class="form-control" name="nombre" value="{{old('nombre')}}" />
                                                </div>                                            
                                                {!! $errors->first('nombre','<span class="help-block">:message</span>')!!}
                                                
                                            </div>
                                    </div>
                
                                    <div class="form-group {{$errors->has('numero_invitados') ? 'has-error':''}}">
                                            <label class="col-md-3 col-xs-9 control-label">Numero de invitados</label>
                                            <div class="col-md-9 col-xs-9">                                            
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" class="form-control" name="numero_invitados" value="{{old('numero_invitados')}}" />
                                                </div>                                            
                                                {!! $errors->first('numero_invitados','<span class="help-block">:message</span>')!!}
                                                
                                            </div>
                                    </div>
                        
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-3 control-label">Fecha</label>
                                        <div class="col-md-9 col-xs-9">
                                            <div class="input-group">
                        
                                                <input type="text" class="form-control datepicker" value="2014-11-01" data-date="06-06-2014"
                                                    data-date-format="dd-mm-yyyy" data-date-viewmode="years" name="fecha">
                                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                            </div>
                                        </div>
                                    </div>

                                    
                        
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-3 control-label">Hora</label>
                                        <div class="col-md-9 col-xs-9">
                                            <div class="input-group bootstrap-timepicker">
                                                <input type="text" class="form-control timepicker" name="hora" />
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                                            </div>
                                        </div>
                                    </div>
                        
                        
                                    <div class="panel-footer" style="background-color:burlywood;">
                                            <button class="btn btn-primary pull-right" type="submit">Crear Evento</button>
                                        </div>
                                        {!!Form::close()!!}
            
                                
                            </div>
                            
                        </div>

                    </div>
                </div>
                
            </div>
        </div>                    
        
    </div>
</div>
<script type='text/javascript' src="{{ asset('js/plugins/bootstrap/bootstrap-timepicker.min.js')}}"></script>  
@endsection