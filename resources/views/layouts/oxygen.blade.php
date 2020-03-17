<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

	<!-- <link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'> -->
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="theme/oxygen/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="theme/oxygen/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="theme/oxygen/css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="theme/oxygen/css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="theme/oxygen/css/owl.carousel.min.css">
	<link rel="stylesheet" href="theme/oxygen/css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="theme/oxygen/css/style.css">

	<!-- Modernizr JS -->
	<script src="theme/oxygen/js/modernizr-2.6.2.min.js"></script>
</head>
<body>
	<div id="page">
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			<div class="row">
				<div class="col-xs-2">
					<div id="gtco-logo"><a href="/"><img width="50" height="50" src="{{ asset('/img/its-putih.png') }}"/></a></div>
				</div>
				<div class="col-xs-8 text-center menu-1">
					<ul>
						<li><a href="/">Home</a></li>
						<li><a href="/anggota">Anggota</a></li>                       
						<li><a href="/blog">Blog</a></li>
						<li><a href="/blog">Hasil</a></li>
					</ul>
				</div>
				<div class="col-xs-2 text-right hidden-xs menu-2">
                    <ul>
                        @guest
                        <li class="btn-cta"><a href="{{ route('login') }}"><span>{{ __('Login') }}</span></a></li> 
                        @else
                        <li class="has-dropdown btn-cta">
							<a href="#"><span>{{ Auth::user()->name }}</span></a>
							<ul class="dropdown">
                                <li><a href='/home'>Dashboard</a></li>
                                <li><a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}</a>
                                </li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                                </form>
							</ul>
                        </li>
                        @endguest                  
                    </ul>
				</div>
			</div>
			
		</div>
	</nav>
        @yield('content')
    <footer id="gtco-footer" role="contentinfo">
		<div class="gtco-container">			
			<div class="row copyright">
				<div class="col-md-12">
					<p class="pull-left">
						<small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small> 
						<small class="block">Designed by <a href="http://gettemplates.co/" target="_blank">GetTemplates.co</a> Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a></small>
					</p>
					<p class="pull-right">
						<ul class="gtco-social-icons pull-right">
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
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
    </div>
    	<!-- jQuery -->
	<script src="theme/oxygen/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="theme/oxygen/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="theme/oxygen/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="theme/oxygen/js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="theme/oxygen/js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="theme/oxygen/js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="theme/oxygen/js/jquery.magnific-popup.min.js"></script>
	<script src="theme/oxygen/js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="theme/oxygen/js/main.js"></script>
</body>
</html>