@extends('layouts.master_principal')

@section('content')


<div class="product" style="background-color:burlywood;">

    <div class="container">

        <div class="product-price1" style="margin-top:150px;">
            <div class="top-sing">
                <div class="col-md-7 single-top">
                    <div class="flexslider">
                        <ul class="slides">
                            <li data-thumb="{{$datos->foto_principal}}">
                            <div class="thumb-image"> <img src="{{ asset ($datos->foto_principal) }}" data-imagezoom="true"
                                        class="img-responsive"> </div>
                            </li>
                            <li data-thumb="{{$datos->foto_secundaria}}">
                                <div class="thumb-image"> <img src="{{asset ($datos->foto_principal)}}" data-imagezoom="true"
                                        class="img-responsive"> </div>
                            </li>   
                        </ul>
                    </div>
                    <!-- FlexSlider -->
                    <script defer src="js/jquery.flexslider.js"></script>
                    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

                    <script>
                        // Can also be used with $(document).ready()
                        $(window).load(function () {
                            $('.flexslider').flexslider({
                                animation: "slide",
                                controlNav: "thumbnails"
                            });
                        });
                    </script>

                </div>
                {!!Form::open(array('url'=>'paquete','method'=>'POST','autocomplete'=>'off'))!!}
                {{Form::token()}}
                <div class="col-md-5 single-top-in simpleCart_shelfItem">
                    <div class="single-para ">
                    <h4>{{$datos->nombre}}</h4>
                    <input type="text" class="form-control" style="display:none" name="paquete_id" value="{{$datos->id}}"/>
                    
             <div class="block">
                <form class="form-horizontal">
                    <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Precio:</label>
                            <label class="col-md-3 col-xs-12 ">{{$datos->precio}}</label>
                    </div>

                    <div class="form-group {{$errors->has('descripcion') ? 'has-error':''}}">
                            <label class="col-md-3 col-xs-12 control-label">Descripcion:</label>
                            <div class="col-md-6 col-xs-12">                                            
                                <div class="input-group">
                                    <input type="text" class="form-control" name="descripcion" value=""/>
                                </div>                                            
                                {!! $errors->first('Descripcion','<span class="help-block">:message</span>')!!}
                                
                            </div>
                    </div>    
                            <div class="form-group {{$errors->has('nombre') ? 'has-error':''}}" role="form">
                                <label class="col-md-3 control-label">Nombre del Evento</label>
                                <div class="col-md-9">
                                    <input type="text" name="nombre"/>
                                </div>
                                
                            {!! $errors->first('Nombre','<span class="help-block">:message</span>')!!}
                            </div>

                              <div class="form-group {{$errors->has('numero_invitados') ? 'has-error':''}}">
                                <label class="col-md-3 control-label">N° de invitados</label>
                                <div class="col-md-9">
                                    <input type="text" name="numero_invitados"/>
                                </div>
                            
                                {!! $errors->first('numero_invitados','<span class="help-block">:message</span>')!!}
                            </div>

                            <div class="form-group">                                        
                                <label class="col-md-3 col-xs-12 control-label">Fecha</label>
                                <div class="col-md-5 col-xs-12">
                                    <div class="input-group">
                                        
                                        <input type="text" class="form-control datepicker" value="2014-11-01"data-date="06-06-2014" data-date-format="dd-mm-yyyy" data-date-viewmode="years" name="fecha">   
                                        <span class="input-group-addon"><span class="fa fa-calendar"></span></span>                                         
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Hora</label>
                                <div class="col-md-5">
                                    <div class="input-group bootstrap-timepicker">
                                        <input type="text" class="form-control timepicker" name="hora" />
                                        <span class="input-group-addon"><span
                                                class="glyphicon glyphicon-time"></span></span>
                                    </div>
                                </div>
                            </div>
                            </div>

                    </div>

                    <div class="panel-footer">                                   
                            <button class="btn btn-primary pull-right" type="submit">Crear Evento</button>
                        </div>

                </div>
            </div>
        </form>
            {!!Form::close()!!}	
        <!---->

        <div class=" bottom-product">
            <div class="col-md-4 bottom-cd simpleCart_shelfItem">
                <div class="product-at ">
                    <a href="#"><img class="img-responsive" src="images/pi3.jpg" alt="">
                        <div class="pro-grid">
                            <span class="buy-in">Buy Now</span>
                        </div>
                    </a>
                </div>
                <p class="tun"><span>Lorem ipsum establish</span><br>CLARISSA</p>
                <div class="ca-rt">
                    <a href="#" class="item_add">
                        <p class="number item_price"><i> </i>$500.00</p>
                    </a>
                </div>
            </div>
            <div class="col-md-4 bottom-cd simpleCart_shelfItem">
                <div class="product-at ">
                    <a href="#"><img class="img-responsive" src="images/pi1.jpg" alt="">
                        <div class="pro-grid">
                            <span class="buy-in">Buy Now</span>
                        </div>
                    </a>
                </div>
                <p class="tun"><span>Lorem ipsum establish</span><br>CLARISSA</p>
                <div class="ca-rt">
                    <a href="#" class="item_add">
                        <p class="number item_price"><i> </i>$500.00</p>
                    </a>
                </div>
            </div>
            <div class="col-md-4 bottom-cd simpleCart_shelfItem">
                <div class="product-at ">
                    <a href="#"><img class="img-responsive" src="images/pi4.jpg" alt="">
                        <div class="pro-grid">
                            <span class="buy-in">Buy Now</span>
                        </div>
                    </a>
                </div>
                <p class="tun"><span>Lorem ipsum establish</span><br>CLARISSA</p>
                <div class="ca-rt">
                    <a href="#" class="item_add">
                        <p class="number item_price"><i> </i>$500.00</p>
                    </a>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="clearfix"> </div>

</div>
</div>


@endsection