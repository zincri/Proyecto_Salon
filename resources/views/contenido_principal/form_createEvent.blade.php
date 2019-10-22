@extends('layouts.master_principal')

@section('content')


<div class="product" style="background-color:burlywood;">

    <div class="container">

        <div class="product-price1" style="margin-top:150px;">
            <div class="top-sing">
                <div class="col-md-7 single-top">
                    <div class="flexslider">
                        <ul class="slides">
                            <li data-thumb="images/j_img9.jpg">
                                <div class="thumb-image"> <img src="images/j_img9.jpg" data-imagezoom="true"
                                        class="img-responsive"> </div>
                            </li>
                            <li data-thumb="images/j_img9.2.jpg">
                                <div class="thumb-image"> <img src="images/j_img9.2.jpg" data-imagezoom="true"
                                        class="img-responsive"> </div>
                            </li>
                            <li data-thumb="images/j_img9.3.jpg">
                                <div class="thumb-image"> <img src="images/j_img9.3.jpg" data-imagezoom="true"
                                        class="img-responsive"> </div>
                            </li>
                            <li data-thumb="images/j_img9.4.jpg">
                                <div class="thumb-image"> <img src="images/j_img9.4.jpg" data-imagezoom="true"
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
                <div class="col-md-5 single-top-in simpleCart_shelfItem">
                    <div class="single-para ">
                        <h4>phenomenal night</h4>
                        <div class="star-on">

                            <div class="review">
                                <a href="#"> 1 customer review </a>

                            </div>
                            <div class="clearfix"> </div>
                        </div>

                        <h5 class="item_price">$ 12,500.00</h5>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                            diam nonummy nibh euismod tincidunt ut laoreet dolore
                            magna aliquam erat </p>
                            <div class="block">
                        <form class="form-horizontal" role="form">
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
                                <label class="col-md-3 col-xs-12 control-label">Fecha</label>
                                <div class="col-md-5 col-xs-12">
                                    <div class="input-group">
                                        
                                        <input type="text" class="form-control datepicker" value="2014-11-01"data-date="06-06-2014" data-date-format="dd-mm-yyyy" data-date-viewmode="years">   
                                        <span class="input-group-addon"><span class="fa fa-calendar"></span></span>                                         
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Default</label>
                                <div class="col-md-5">
                                    <div class="input-group bootstrap-timepicker">
                                        <input type="text" class="form-control timepicker" />
                                        <span class="input-group-addon"><span
                                                class="glyphicon glyphicon-time"></span></span>
                                    </div>
                                </div>
                            </div>
                        </form>
                            </div>

                    </div>

                    <button class="btn btn-success add-cart item_add " onclick="location.href='eventos'"><i
                            class="glyphicon glyphicon-shopping-cart"></i></button>

                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
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