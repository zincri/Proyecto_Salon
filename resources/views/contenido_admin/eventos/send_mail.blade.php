<div class="message-box message-box-primary animated fadeIn" id="message-box-info-contact-{{$datos->id}}">

   {{--  {!!Form::open(array(''=>'mailto:jhoanad4@gmail.com','method'=>'POST','autocomplete'=>'off'))!!}
    {{Form::token()}} --}}

    <form action='mailto:jhoanad4@gmail.com' method="POST">

    <div class="mb-container">
        <div class="mb-middle">
            <div class="mb-content">

                <div class="form-horizontal">
                    <div class="panel pan{{--  --}}el-default">


                        <div class="panel-body">

                            <div class="row">

                                <div class="form-group  {{$errors->has('name') ? 'has-error':''}}">
                                    <label class="col-md-3 col-xs-12 control-label" for="name">Nombre</label>
                                    <div class="col-md-6 col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>

                                            <input type="text" class="form-control" name="name" />
                                        </div>
                                        {!! $errors->first('name','<span class="help-block">:message</span>')!!}

                                    </div>
                                </div>
                                <div class="form-group {{$errors->has('msg') ? 'has-error':''}}">
                                    <label class="col-md-3 col-xs-12 control-label" for="name">Motivo de declinación</label>
                                    <div class="col-md-6 col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                            <input type="text" class="form-control" name="msg" />
                                        </div>
                                        {!! $errors->first('msg','<span class="help-block">:message</span>')!!}

                                    </div>
                                    <div class="form-group">
                                        <button type="submit" id='btn-contact' class="btn">Enviar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
        {{-- {!!Form::close()!!} --}}
    </div>
