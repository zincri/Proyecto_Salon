@extends('layouts.master_usuario')
@section('content')

<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(images/j_img8.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <div class="display-t">
                    <div class="display-tc animate-box" data-animate-effect="fadeIn">
                        <h1> Galeria </h1>
                        <h2></h2>
                        <div class="simply-countdown simply-countdown-one"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="row row-bottom-padded-md" style="margin-top:25px;">
    <div class="col-md-12">
        <ul id="fh5co-gallery-list">
        @foreach ($dato as $item)
            <li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/{{$item}});"> 
            <a href="images/{{$item}}">
                <div class="case-studies-summary">
                </div>
            </a>
        </li>

        @endforeach
 
        </ul>		
    </div>
</div>

@endsection