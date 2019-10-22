@extends ('layouts.master_admin')

@section ('content')
{!!Form::open(array('action'=>['Admin\PaquetesController@update',44],'method'=>'PATCH','autocomplete'=>'off', 'files' => 'true'))!!}
{{Form::token()}}

                <div class="form-horizontal">
                <div class="panel panel-default">
                                
                               
                                <div class="panel-body">                                                                        

                                <div class="form-group {{$errors->has('nombre') ? 'has-error':''}}">
                                        <label class="col-md-3 col-xs-12 control-label">Nombre del Paquete</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" class="form-control" name="nombre" value="Paquete ejemplo"/>
                                            </div>                                            
                                            {!! $errors->first('nombre','<span class="help-block">:message</span>')!!}
                                            
                                        </div>
                                </div>

                                <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Servicios Integrados</label>
                                        <div class="col-md-2">                                    
                                            <label class="check"><input type="checkbox" class="icheckbox"/> Mesas</label>
                                        </div>
                                        <div class="col-md-2">                                    
                                            <label class="check"><input type="checkbox" class="icheckbox" checked="checked"/> Conjunto</label>
                                        </div>
                                        <div class="col-md-2">                                    
                                            <label class="check"><input type="checkbox" class="icheckbox" disabled/> Ninguna</label>
                                        </div>
                                </div>

                                <div class="form-group {{$errors->has('file') ? 'has-error':''}}">

                                        <label class="col-md-3 col-xs-12 control-label">Imagen Principal</label>
                                        <div class="col-md-6 col-xs-12">                               
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <input type="file"  name="file" id="file"  class="file" accept="image/*" data-preview-file-type="any"/>
                                                        {!! $errors->first('file','<span class="help-block">:message</span>')!!}
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