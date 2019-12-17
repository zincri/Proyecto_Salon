<div class="message-box message-box-primary animated fadeIn" id="message-box-info-contact-{{$datos->id}}">

   {{--  {!!Form::open(array(''=>'mailto:jhoanad4@gmail.com','method'=>'POST','autocomplete'=>'off'))!!}
    {{Form::token()}} --}}

    <form action='mailto:{{$user->email}}' method="POST">

    <div class="mb-container">
        <div class="mb-middle">
            <div class="mb-content">

                <div class="form-horizontal">
                    <div class="panel pan{{--  --}}el-default">


                        <div class="panel-body">

                            <div class="row">

                                <h3>Enviar motivo de Rechazo!!!</h3>

                        </div>
                        <div class="form-group">
                            <button type="submit" id='btn-contact' class="btn btn-primary">Enviar correo</button>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
        {{-- {!!Form::close()!!} --}}
    </div>
