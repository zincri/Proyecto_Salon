<div class="message-box message-box-success animated fadeIn" id="message-box-success-create">


{!!Form::open(array('url'=>'administrador/paquetes','method'=>'POST','autocomplete'=>'off', 'files' => 'true'))!!}
{{Form::token()}}

<div class="mb-container">
        <div class="mb-middle">
            <div class="mb-content">
                <div class="form-horizontal">
                <div class="panel panel-default">
                                
                               
                                <div class="panel-body">                                                                        

                                <div class="form-group {{$errors->has('nombre') ? 'has-error':''}}">
                                        <label class="col-md-3 col-xs-12 control-label">Nombre del Paquete</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                            <input type="text" class="form-control" name="nombre" value="{{old('nombre')}}" />
                                            </div>                                            
                                            {!! $errors->first('nombre','<span class="help-block">:message</span>')!!}
                                            
                                        </div>
                                </div>

                                <div class="form-group {{$errors->has('descripcion') ? 'has-error':''}}">
                                        <label class="col-md-3 col-xs-12 control-label">Descripcion del Paquete</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" class="form-control" name="descripcion" value="{{old('descripcion')}}"/>
                                            </div>                                            
                                            {!! $errors->first('descripcion','<span class="help-block">:message</span>')!!}
                                            
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

                                <div class="form-group {{$errors->has('file2') ? 'has-error':''}}">

                                        <label class="col-md-3 col-xs-12 control-label">Imagen Secundaria</label>
                                        <div class="col-md-6 col-xs-12">                               
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <input type="file"  name="file2" id="file2"  class="file" accept="image/*" data-preview-file-type="any"/>
                                                        {!! $errors->first('file2','<span class="help-block">:message</span>')!!}
                                                    </div>
                                                </div>                                                            
                                        </div>
                                </div>

                                <div class="form-group {{$errors->has('precio') ? 'has-error':''}}">
                                        <label class="col-md-3 col-xs-12 control-label">Precio del Paquete</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" class="form-control" name="precio" value="{{old('precio')}}" />
                                            </div>                                            
                                            {!! $errors->first('precio','<span class="help-block">:message</span>')!!}
                                            
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