@extends('layouts.master_principal')
@section('content')



<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url({{ asset ('images/j_img1.jpg') }});"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <div class="display-t">
                    <div class="display-tc animate-box" data-animate-effect="fadeIn">
                        <h1> Real Fantasy Events </h1>
                        <h2>Los eventos son efímeros, las emociones perduran</h2>
                        <div class="simply-countdown simply-countdown-one"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="caviar-about-us-area section-padding-150" id="about">
    <div class="container">
        <!-- About Us Single Area -->
        <div class="row align-items-center">
            <div class="col-12 col-md-6">
                <div class="about-us-thumbnail wow fadeInUp" data-wow-delay="0.5s">
                    <img src="images/j_img17.jpg" alt="">
                </div>
            </div>
            <div class="col-12 col-md-6 col-md-8 ml-md-auto animate-box">
                <div class="row fh5co-heading">
                    <h2>¿Quienes Somos?</h2>
                </div>
                <div class="about-us-content">
                    <p>Real Fantasy Event es la empresa líder para la organización de eventos en México. Durante más de
                        20 años, nos hemos armado con las más modernas herramientas y con un staff de profesionales en
                        diversas disciplinas, asi como event planners con certificación CMS (Certified Meetings
                        Specialist). Esto nos permite crear, organizar y orquestrar eventos de cualquier magnitud, con
                        la calidad y eficiencia que nuestros clientes merecen..</p>
                </div>
            </div>
        </div>

        <div id="fh5co-couple-story">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                        <h2>Testimoniales</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-md-offset-0">
                        <ul class="timeline animate-box">
                            <li class="animate-box">
                                <div class="timeline-badge" style="background-image:url(images/j_img10.jpg);"></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h3 class="timeline-title">Boda de Travis & Abby</h3>
                                        <span class="date">December 25, 2018</span>
                                    </div>
                                    <div class="timeline-body">
                                        <p>Solo queremos dar las gracias a Fantasy Real Events por estar con nosotros en
                                            el inicio de esta nueva aventura.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-inverted animate-box">
                                <div class="timeline-badge" style="background-image:url(images/j_img11.jpg);"></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h3 class="timeline-title">Cumpleaños Jackson</h3>
                                        <span class="date">Abril 28, 2019</span>
                                    </div>
                                    <div class="timeline-body">
                                        <p>La mejor fiesta,Gracias a Fantasy Real Events.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="animate-box">
                                <div class="timeline-badge" style="background-image:url(images/j_img12.jpg);"></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h3 class="timeline-title">Daniela XV</h3>
                                        <span class="date">Junio 13, 2019</span>
                                    </div>
                                    <div class="timeline-body">
                                        <p>Gracias por el apoyo y la dedicación a su trabajo. Todo quedó excelente.
                                            Muchas gracias.</p>
                                    </div>
                                </div>
                            </li>
                            </li>
                            <li class="timeline-inverted animate-box">
                                <div class="timeline-badge" style="background-image:url(images/j_img13.jpg);"></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h3 class="timeline-title">Bautizo de Juan</h3>
                                        <span class="date">Septiembre 28, 2019</span>
                                    </div>
                                    <div class="timelines">
                                        <p>Les agradecemos de todo corazón por tanto. Fueron un apoyo incondicional para
                                            nosotros, gracias por hacer de este momento algo inolvidable.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="animate-box">
                                <div class="timeline-badge" style="background-color:whitesmoke;">
                                <p><a href="{{ url ('paquete')}}" class="btn btn-default btn-lg">Agenda tu evento</a></p>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>

        @endsection