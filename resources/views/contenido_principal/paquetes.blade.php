@extends('layouts.master_principal')
@section('content')

<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(images/j_img7.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <div class="display-t">
                    <div class="display-tc animate-box" data-animate-effect="fadeIn">
                        <h1> Real Fantasy Events </h1>
                        <h2>Los eventos son efímeros, las emociones perduran</h2>
                        <div class="simply-countdown simply-countdown-one"></div>
                        <p><a href="formC" class="btn btn-default btn-sm">Crea tu evento</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="row" style="margin-top:20px;">
    <div class="col-xl-12 ">
<section class="caviar-dish-menu clearfix" id="menu">
    <div class="container">
        <div class="row">
            <div class="col-12 menu-heading">
                <div class="section-heading text-center">
                    <h2>Paquetes</h2>
                </div>
            </div>
        </div>
        <div class="row col-12">
            <div class="col-12 col-xl-12 col-sm-6 col-md-4">
                <div class="caviar-single-dish wow fadeInUp" data-wow-delay="0.5s">
                    <img src="images/j_img4.jpg" alt="">
                    <div class="dish-info">
                        <h6 class="dish-name">Lorem Ipsum Dolor Sit Amet</h6>
                        <p class="dish-price">Crear</p>
                    </div>
                </div>
            </div> 
            <div class="col-12 col-sm-6 col-md-4">
                <div class="caviar-single-dish wow fadeInUp" data-wow-delay="1s">
                    <img src="images/j_img3.jpg" alt="">
                    <div class="dish-info">
                        <h6 class="dish-name">Lorem Ipsum</h6>
                        <p class="dish-price">Crear</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <div class="caviar-single-dish wow fadeInUp" data-wow-delay="1.5s">
                    <img src="images/j_img5.jpg" alt="">
                    <div class="dish-info">
                        <h6 class="dish-name">Lorem Ipsum Dolor Sit Amet</h6>
                        <p class="dish-price">Crear</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    </div>
</div>
@endsection