@extends('layouts.master_principal')
@section('content')

<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url({{ asset ('images/j_img8.jpg') }});" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <div class="display-t">
                    <div class="display-tc animate-box" data-animate-effect="fadeIn">
                        <h1> Galeria </h1>
                        <h2></h2>
                        <div class="simply-countdown simply-countdown-one"></div>
                        <p><a href="#" class="btn btn-default btn-sm">Agregar Fotos</a></p>
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
            <li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url({{ ($item) }});"> 
                <dt><span class="fa fa-pencil badge-danger"> </span></dt>
                <dt><span class="gallery-item-remove"><i class="fa fa-times"></i></span></dt>
            <a href="{{asset ($item)}}">
                <div class="case-studies-summary">
                </div>
            </a>
        </li>

        @endforeach
 
        </ul>		
    </div>
</div>

@endsection