@extends('layouts.master_usuario')
@section('content')

<header id="fh5co-header" class="fh5co-cover" role="banner"
    style="background-image:url({{ asset ('images/j_img2.jpg') }});" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <div class="display-t">
                    <div class="display-tc animate-box" data-animate-effect="fadeIn">
                        <h1> Contacto </h1>
                        <h2></h2>
                        <div class="simply-countdown simply-countdown-one"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="fh5co-section">
    <div class="container">
        <div class="fh5co-contact-info col-lg-7">
            <h3>Contact Information</h3>
            <ul>
                <li class="address">Av.Costa rica , <br> Manz 01 Lote 39, Col Tuxtla Chico</li>
                <li class="phone">Tel:  961 225 0380</li>
                <li class="email">Email: 7397@ittg.com</a></li>
                <li class="url">Create by Zincri Mendoza & Jhoana Dominguez.com</li>
            </ul>
        </div>

        <div id="map-container-google-11" class="z-depth-1-half map-container-6" style="height: 4000px">
            <iframe src="https://maps.google.com/maps?q=new%20delphi&t=&z=13&ie=UTF8&iwloc=&output=embed"
                frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>

    </div>
</div>

@endsection