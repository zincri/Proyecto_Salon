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
		<link rel="stylesheet" type="text/css" id="theme" href="{{ asset ('css/theme-default.css') }}"/>
	
		<!-- Theme style  -->
		<link rel="stylesheet" href="{{ asset ('css/style.css') }}">
		<link rel="icon" href="{{ asset ('favicon.ico') }}" type="image/x-icon" />      
		<link rel="stylesheet" type="text/css" id="theme" href="{{ asset ('css/theme-default.css') }}"/>
			<!--Style Menu-->
			<link href="{{ asset ('css/responsive/responsive.css')}}" rel="stylesheet') }}">
			<link href="{{ asset ('css/style2.css') }}" rel="stylesheet">
			
					
  <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="{{ asset ('js/plugins/jquery/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset ('js/plugins/jquery/jquery-ui.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset ('js/plugins/bootstrap/bootstrap.min.js') }}"></script>                
        <!-- END PLUGINS -->
           
        <script type="text/javascript" src="{{ asset ('js/plugins/blueimp/jquery.blueimp-gallery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset ('js/plugins/dropzone/dropzone.min.js') }}"></script>
        <!-- START TEMPLATE -->
        <script type="text/javascript" src="{{ asset ('js/settings.js') }}"></script>
        
        <script type="text/javascript" src="{{ asset ('js/plugins.js') }}"></script>         
        <!-- END TEMPLATE -->
			
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
					<div id="fh5co-logo"><a href="">Fantasy</a></div>
				</div>
				<div class="col-xs-10 text-right menu-1">
					<ul>
						<li class="active"><a href="/">Home</a></li>
						<li><a href="{{ url ('usuario/paquete') }}">Paquetes</a></li>
						<li>
						<a href="{{ url ('usuario/galeria') }}">Galeria</a>
						</li>
						<li>
							<a href="{{ url ('login')}}">Login</a>
						</li>
						<li><a href="{{ url ('usuario/contacto') }}">Contacto</a></li>
						<li><a class="glyphicon glyphicon-shopping-cart" href="login"></a></li>
					</ul>
				</div>
			</div>
			
		</div>
	</nav>

  
   @yield('content')
  


	<footer id="fh5co-footer" role="contentinfo">
		<div class="container text-center" >
				<div class="row copyright">
				<div class="col-md-12 text-center">
						<h4>Contact Information</h4>
						<ul class="fh5co-footer-links">
							<li>198 West 21th Street, <br> Suite 721 New York NY 10016</li>
							<li><a href="/">+ 1235 2355 98</a></li>
							<li><a href="/">7397@ittg.com</a></li>
							<li><a href="/">Zincri-Jhoana</a></li>
						</ul>
					</div>
	
				</div>
					<div class="col-md-12 text-center">
						<p>
							<small class="block">&copy; Frameworks Class/Jhoana/Zincri.</small> 
						</p >
						<p>
							<ul class="fh5co-social-icons">
								<li><a href="#"><i class="icon-twitter2"></i></a></li>
								<li><a href="#"><i class="icon-facebook2"></i></a></li>
								<li><a href="#"><i class="icon-linkedin2"></i></a></li>
								<li><a href="#"><i class="icon-dribbble2"></i></a></li>
							</ul>
						</p>
					</div>
				</div>
	
			</div>

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