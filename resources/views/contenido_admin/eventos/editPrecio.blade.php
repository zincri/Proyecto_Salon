<div class="message-box message-box-primary animated fadeIn" id="message-box-info-editPrecio-{{$item->id}}">

    {!!Form::open(array('url'=>['/administrador/eventos/editPrecio/'.$item->id],'method'=>'POST','autocomplete'=>'off'))!!}
    {{Form::token()}}

    <div class="mb-container">
        <div class="mb-middle">
            <div class="mb-content">

                <div class="form-horizontal">
                    <div class="panel panel-default">


                        <div class="panel-body">

                            <div class="row">
                                <div class="col-md-12">
                                    <div>
                                        <div>
                                            <h3 class="panel-title"><strong>Nombre del Paquete:</strong>
                                                {{$item->nombre}}</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div>
                                        <div>
                                            <h3 class="panel-title"><strong>Precio Sugerido:</strong> {{$item->precio}}
                                            </h3>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group {{$errors->has('precio') ? 'has-error':''}}">
                                    <label class="col-md-3 col-xs-12 control-label">Precio del Evento</label>
                                    <div class="col-md-6 col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>


                                            <input type="text" class="form-control" name="precio"
                                                value="{{$item->precio}}" />
                                        </div>
                                        {!! $errors->first('nompreciobre','<span class="help-block">:message</span>')!!}

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
