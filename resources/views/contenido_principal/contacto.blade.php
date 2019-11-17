@extends('layouts.master_principal')
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
                        <p><a href="#" class="btn btn-default btn-sm">Agregar Fotos</a></p>
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
                <li class="address">198 West 21th Street, <br> Suite 721 New York NY 10016</li>
                <li class="phone"><a href="tel://1234567920">+ 1235 2355 98</a></li>
                <li class="email"><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
                <li class="url"><a href="http://gettemplates.co">gettemplates.co</a></li>
            </ul>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Google World Map</h3>
            </div>
            <div class="panel-body panel-body-map">
                <div id="google_world_map" style="width: 100%; height: 300px;"></div>
            </div>
        </div>

    </div>
</div>

@endsection