<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Principal</title>


	<!--Links-->
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{ asset('css/css/animate.css') }}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{asset ('css/css/icomoon.css')}}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{asset ('css/css/bootstrap/bootstrap.css') }}">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{ asset ('css/magnific-popup.css') }}">
	

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="{{ asset ('css/css/owl.carousel.min.css') }}">

	<link rel="stylesheet" href="{{ asset ('css/css/owl.theme.default.min.css') }}">
	<link rel="stylesheet" type="text/css" id="theme" href="{{ asset ('css/theme-default.css') }}" />
	<!-- Theme style  -->
	<link rel="stylesheet" href="{{ asset ('css/style.css') }}">
	<link rel="icon" href="{{ asset ('favicon.ico') }}" type="image/x-icon" />
	<!--Style Menu-->
	<link href="{{ asset ('css/responsive/responsive.css')}}" rel="stylesheet">
	<link href="{{ asset ('css/style2.css') }}" rel="stylesheet">


	<!-- START PLUGINS -->
	<script type="text/javascript" src="{{ asset ('js/plugins/jquery/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset ('js/plugins/jquery/jquery-ui.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset ('js/plugins/bootstrap/bootstrap.min.js') }}"></script>
	<!-- END PLUGINS -->

	

</head>

<body>

	<!--Menu-->
	<div class="fh5co-loader"></div>

	<div id="page">
		<nav class="fh5co-nav" role="navigation">
			<div class="container">
				<div class="row">
					<div class="col-xs-2">
						<div id="fh5co-logo"><a href="">Fantasy</a></div>
					</div>
					<div class="col-xs-10 text-right menu-1">
						<ul>
						<li class="active"><a href="{{url ('sesion')}}">Home</a></li>
							<li><a href="{{ url ('paquete') }}">Paquetes</a></li>
							<li>
								<a href="{{ url ('eventos') }}">Eventos</a>
							</li>
							<li><a href="{{ url ('contacto') }}">Contacto</a></li>
							<li><a href="">{{Auth::user()->name}}</a></li>		
						<li>
								<a href="{{ route('logout') }}" 
								onclick="event.preventDefault();
									document.getElementById('logout-form').submit();">Logout</a>
								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									@csrf
								</form>
						</li>
						</ul>
					</div>
				</div>

			</div>
		</nav>


		@yield('content')



		
		<footer id="fh5co-footer" role="contentinfo">
			<div class="container text-center">
				<div class="row copyright">
					<div class="col-md-12 text-center">
						<h4>Contact</h4>
						<ul class="fh5co-footer-links">
							<li>Av.Costa rica <br> Manz 01 Lote 39, Col Tuxtla Chico</li>
							<li><a href="/">+ 961 225 0380</a></li>
							<li><a href="/">7397@ittg.com</a></li>
							<li><a href="/">Create by Zincri Mendoza-Jhoana Dominguez</a></li>
						</ul>
					</div>

				</div>
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; Frameworks Class/Jhoana/Zincri.</small>
					</p>
				</div>
			</div>

	</div>

	</div>
	</footer>




	<script src="{{asset ('https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places')}}"></script>

	<script type='text/javascript' src="{{ asset ('js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
	<script type='text/javascript' src="{{ asset ('js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
	<script type='text/javascript' src="{{ asset ('js/plugins/jvectormap/jquery-jvectormap-europe-mill-en.js')}}"></script>
	<script type='text/javascript' src="{{asset ('js/plugins/jvectormap/jquery-jvectormap-us-aea-en.js')}}"></script>

	<!-- Waypoints -->
	<script src="{{ asset ('js/jquery.waypoints.min.js') }}"></script>
	<!-- Carousel -->
	<script src="{{ asset ('js/owl.carousel.min.js') }}"></script>
	<!-- countTo -->
	<script src="{{ asset ('js/jquery.countTo.js') }}"></script>

	<!-- Stellar -->
	<script src="{{ asset ('js/jquery.stellar.min.js') }}"></script>
	<!-- Magnific Popup -->
	<script src="{{ asset ('js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset ('js/magnific-popup-options.js') }}"></script>



	<script src="{{ asset ('js/simplyCountdown.js') }}"></script>

	<script type="text/javascript" src="{{asset('js/plugins/bootstrap/bootstrap-datepicker.js')}}"></script>

	<script type='text/javascript' src="{{ asset('js/plugins/bootstrap/bootstrap-timepicker.min.js')}}"></script>                
	
	<script type='text/javascript' src="{{ asset('js/plugins/daterangepicker/daterangepicker.js')}}"></script>     

	<!-- Main -->
	<script src="{{ asset ('js/main.js') }}"></script>

	

	<script type="text/javascript" src="{{asset('js/plugins/bootstrap/bootstrap-colorpicker.js')}}"></script>
	
	<!-- END THIS PAGE PLUGINS -->
	<!-- THIS PAGE PLUGINS -->
	<script type='text/javascript' src='{{asset('js/plugins/icheck/icheck.min.js')}}'></script>
	<script type="text/javascript" src="{{asset('js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js')}}"></script>
	
	<script type="text/javascript" src="{{asset('js/plugins/bootstrap/bootstrap-datepicker.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/plugins/bootstrap/bootstrap-timepicker.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/plugins/bootstrap/bootstrap-colorpicker.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/plugins/bootstrap/bootstrap-file-input.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/plugins/bootstrap/bootstrap-select.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/plugins/tagsinput/jquery.tagsinput.min.js')}}"></script>
	<!-- END THIS PAGE PLUGINS -->   

	<script type="text/javascript" src="{{ asset('js/plugins.js')}}"></script>        
	<script type="text/javascript" src="{{ asset('js/actions.js')}}"></script>

</body>

</html>