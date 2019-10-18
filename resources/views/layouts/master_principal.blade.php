<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Principal</title>
	
	
	<!--Links-->
		<!-- Animate.css -->
		<link rel="stylesheet" href="{{ asset('css/animate.css') }}">
		<!-- Icomoon Icon Fonts-->
		<link rel="stylesheet" href="{{asset ('css/icomoon.css')}}">
		<!-- Bootstrap  -->
		<link rel="stylesheet" href="{{asset ('css/bootstrap.css') }}">
	
		<!-- Magnific Popup -->
		<link rel="stylesheet" href="{{ asset ('css/magnific-popup.css') }}">
	
		<!-- Owl Carousel  -->
		<link rel="stylesheet" href="{{ asset ('css/owl.carousel.min.css') }}">
		<link rel="stylesheet" href="{{ asset ('css/owl.theme.default.min.css') }}">
	
		<!-- Theme style  -->
		<link rel="stylesheet" href="{{ asset ('css/style.css') }}">

		<!--Style Menu-->
		<link href="css/responsive/responsive.css" rel="stylesheet">
		<link href="{{ asset ('css/style2.css') }}" rel="stylesheet">
	
	<script src="{{ asset ('js/modernizr-2.6.2.min.js') }}"></script>

</head>
<body>

<!--Menu-->
<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="container">
			<div class="row">
				<div class="col-xs-2">
					<div id="fh5co-logo"><a href="">Fantasy<strong>.</strong></a></div>
				</div>
				<div class="col-xs-10 text-right menu-1">
					<ul>
						<li class="active"><a href="">Home</a></li>
						<li><a href="paquetes">Paquetes</a></li>
						<li>
							<a href="galeria">Galeria</a>
						</li>
						<li>
							<a href="gallery.html">Login</a>
						</li>
						<li><a href="contact.html">Contacto</a></li>
					</ul>
				</div>
			</div>
			
		</div>
	</nav>


    
  
   @yield('content')
  


	<footer id="fh5co-footer" role="contentinfo">
		<div class="container">
         <h1>Pie</h1>

		</div>
	</footer>


		<!-- jQuery -->
		<script src="{{ asset ('js/jquery.min.js') }}"></script>
		<!-- jQuery Easing -->
		<script src="{{ asset ('js/jquery.easing.1.3.js') }}"></script>
		<!-- Bootstrap -->
		<script src="{{ asset ('js/bootstrap.min.js') }}"></script>
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
	
		<!-- // <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/0.0.1/prism.min.js"></script> -->
		<script src="{{ asset ('js/simplyCountdown.js') }}"></script>
		<!-- Main -->
		<script src="{{ asset ('js/main.js') }}"></script>
</body>
</html>