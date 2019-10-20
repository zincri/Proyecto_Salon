@extends('layouts.master_principal')
@section('content')


<header id="fh5co-header"  class="fh5co-cover" role="banner" data-stellar-background-ratio="0.5" style="background-image:url(images/j_img7.jpg);">
    <div class="overlay"></div>
        <div class="container">
    <div class="block" style="margin-top:150px;">
     <form class="form-horizontal"  style="background-color:#ffffff;"  role="form">   
            <div class="form-group">
                    <label class="col-md-3 control-label">Servicios</label>
                    <div class="col-md-5">                                        
                        <select class="form-control select">
                            <option>Boda</option>
                            <option>XV años</option>
                            <option>Cumpleaños</option>
                            <option>Baby Shower</option>
                            <option>Bautizo</option>
                        </select>
                    </div>
             </div>

             <div class="form-group">
                    <label class="col-md-3 control-label">Paquete</label>
                    <div class="col-md-5">                                        
                        <select class="form-control select">
                            <option>Gold</option>
                            <option>Aquarium</option>
                            <option>phenomenal night</option>
                            <option>vintage</option>
                            <option>Memories</option>
                            <option>Dreams</option>
                        </select>
                    </div>
             </div>

            <div class="form-group">
                <label class="col-md-3 control-label">Día del Evento</label>
                <div class="col-md-5">
                    <div class="input-group" >
                        <input type="text" class="form-control" value="07-07-2014" id="dp-4" data-date="07-07-2014" data-date-format="dd-mm-yyyy" data-date-viewmode="months"/>
                        <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label">Hora del Evento</label>
                <div class="col-md-5">
                    <div class="input-group bootstrap-timepicker">
                        <input type="text" class="form-control timepicker"/>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                    </div>
                </div>
            </div>



                </div>
            </div>
        </form>
    </div>
        </div>
    </div>
</div>

    
@endsection