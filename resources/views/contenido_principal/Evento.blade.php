@extends('layouts.master_principal')
@section('content')

<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(images/j_img7.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <div class="display-t">
                    <div class="display-tc animate-box" data-animate-effect="fadeIn">
                        <h1>Mis Eventos</h1>
                        <h2></h2>
                        <div class="simply-countdown simply-countdown-one"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="container" style="margin-top:25px;">           
<form action="http://demo.themeburn.com/kiddos/1/checkout/cart/edit" method="post" enctype="multipart/form-data" id="cart_form"> 
    <div class="cart-info tb_min_w_500"> 
        <table class="table">
         <thead> 
            <tr> <td class="image">Image</td>
                 <td class="name">Paquete</td>
                 <td class="model">Servicio</td> 
                 <td class="price">Precio Unitario</td>
                 <td class="quantity"></td> 
            </tr> 
        </thead> 
        <tbody> 
            <tr> 
                <td class="image timeline-badge"> 
                <a href="">
                    <img src="images/j_img18.jpg"></a>
                 </td> 
                 <td class="name">
                     <a href="">Gold</a>
                      <br> <small></small> 
                      <br> <small></small>
                     </td> <td class="model">Boda</td>
                            <td class="price">$12,000.00</td>
                            <td class="quantity"><div class="input-group btn-block" style="max-width: 200px;"> 
                                    <span class="input-group-btn">
                                        <button type="button" data-toggle="tooltip" title="Edit" class="btn btn-default tb_no_text">
                                           <i class="fa fa-pencil"></i>
                                       </button> 
                                       <button type="button" data-toggle="tooltip" title="Remove" class="btn btn-danger tb_no_text" onclick="cart.remove('3649');"><i class="fa fa-times-circle">
                                           </i></button></span></div> </td> 
                        </tr> </tbody> </table> </div>
                    </form>
</div>
                
@endsection