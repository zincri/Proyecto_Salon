@extends ('layouts.master_cliente')

@section ('content')
{!!Form::open(array('url'=>'eventos/galeria/store/'.$id.'','method'=>'POST','autocomplete'=>'off', 'files' => 'true'))!!}
{{Form::token()}}
                <div class="form-horizontal">
                <div class="panel panel-default">
                        <input type="text" class="form-control" style="display:none" name="evento_id" value="{{$id}}"/>
                                <div class="form-group {{$errors->has('url') ? 'has-error':''}}">

                                        <label class="col-md-3 col-xs-12 control-label">Imagen Principal</label>
                                        <div class="col-md-6 col-xs-12">                               
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <input type="file"  name="url" id="file"  class="file" accept="image/*" data-preview-file-type="any"/>
                                                        {!! $errors->first('url','<span class="help-block">:message</span>')!!}
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