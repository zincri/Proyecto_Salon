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
					<div id="fh5co-logo"><a href="">Wedding<strong>.</strong></a></div>
				</div>
				<div class="col-xs-10 text-right menu-1">
					<ul>
						<li class="active"><a href="">Home</a></li>
						<li><a href="">Story</a></li>
						<li class="has-dropdown">
							<a href="">Services</a>
							<ul class="dropdown">
								<li><a href="#">Web Design</a></li>
								<li><a href="#">eCommerce</a></li>
								<li><a href="#">Branding</a></li>
								<li><a href="#">API</a></li>
							</ul>
						</li>
						<li class="has-dropdown">
							<a href="gallery.html">Gallery</a>
							<ul class="dropdown">
								<li><a href="#">HTML5</a></li>
								<li><a href="#">CSS3</a></li>
								<li><a href="#">Sass</a></li>
								<li><a href="#">jQuery</a></li>
							</ul>
						</li>
						<li><a href="contact.html">Contact</a></li>
					</ul>
				</div>
			</div>
			
		</div>
	</nav>
<!--Banner Foto-->
<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1> Real Fantasy Events </h1>
							<h2>Los eventos son Efímeros, las emociones perduran</h2>
							<div class="simply-countdown simply-countdown-one"></div>
							<p><a href="#" class="btn btn-default btn-sm">Save the date</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
    </header>
    
    
   @yield('content')
	


	<footer id="fh5co-footer" role="contentinfo">
		<div class="container">

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small> 
						<small class="block">Designed by <a href="http://freehtml5.co/" target="_blank">FREEHTML5.co</a> Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a></small>
					</p>
					<p>
						<ul class="fh5co-social-icons">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p>
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