<!DOCTYPE html>
<html lang="en">
	<head>
		<title>DMA Guide | @yield('title')</title>

		{{-- META DATA --}}
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		{{-- SITE META --}}
		<meta name="url" content="https://defensive-measures-wiki.000webhostapp.com/">
		<meta name="type" content="website">
		<meta name="title" content="Defensive Measures Guide">
		<meta name="description" content="A Guide dedicated to Defensive Measures Add-on developed by Virus5600. Contains all details needed to know in DMA, ranging from installation, up to the updates released by the add-on.">
		<meta name="image" content="{{ URL::asset('images/banner.png') }}">
		<meta name="image:alt" content="{{ URL::asset('images/banner.alt.png') }}">
		<meta name="keywords" content="Defensive, Defensive Measures, Add-on, Defensive Measures Add-on, Wiki, Guide, Defensive Measures Wiki, Defensive Measures Guide, Defensive Measures Add-on Wiki, Defensive Measures Add-on Guide, CodeSenpai, Virus5600, SatchTFF">
		<meta name="application-name" content="Defensive Measures Add-on Guide">
		<meta name="author" content="Virus5600">

		{{-- OG META --}}
		<meta name="og:url" content="https://defensive-measures-wiki.000webhostapp.com/">
		<meta name="og:type" content="website">
		<meta name="og:title" content="Defensive Measures Guide">
		<meta name="og:image" content="{{ URL::asset('images/banner.png') }}">
		<meta name="og:image:alt" content="{{ URL::asset('images/banner.alt.png') }}">
		<meta name="description" content="A Guide dedicated to Defensive Measures Add-on developed by Virus5600. Contains all details needed to know in DMA, ranging from installation, up to the updates released by the add-on.">

		{{-- jQuery 3.2.1 --}}
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

		{{-- Popper.js 1.12.6 --}}
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>

		{{-- Bootstrap 4.0 --}}
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

		{{-- Darkly Theme for Bootstrap --}}
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.6.0/dist/darkly/bootstrap.min.css">

		{{-- Slick Carousel 1.9.0 --}}
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css"/>
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css"/>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"></script>

		{{-- Sweet Alert 2 --}}
		<link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
		<script src="//cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.js"></script>
		<!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script> -->

		{{-- Fontawesome --}}
		<script src="https://kit.fontawesome.com/d4492f0e4d.js" crossorigin="anonymous"></script>

		{{-- FONT: Minecraftia --}}
		<link rel="stylesheet" media="screen" href="https://fontlibrary.org//face/minecraftia" type="text/css"/>

		{{-- Smooth-Scroll.js 1.0 --}}
		<script type="text/javascript" src="https://virus5600.github.io/Random-Developments/Smooth-Scroll-Library/smooth-scroll.js"></script>

		{{-- Local CSS --}}
		<link rel="stylesheet" href="/css/style.css" type="text/css"/>

		{{-- Custom CSS --}}
		@yield('css')

		{{-- Favicon --}}
		<link rel='icon' type='image/png' href='/images/UI/Cannon Turret.png'>
	</head>

	<body class="bg-dark" style="background-color: #222 !important;" id="body">
		<noscript>
			<style type="text/css">
				.js-only {
					display: none!important;	/* Make the element disappear if JavaScript isn't allowed */
				}
			</style>
		</noscript>
			
		{{-- Navigation Bar --}}
		<nav class="navbar fixed-top navbar-expand-lg navbar-dark py-0 px-1 px-lg-3 shadow" style="background-color: #444;">
			{{-- Branding --}}
			<a class="navbar-brand m-0" href="{{route('home')}}">
				<img src="/images/UI/Cannon Turret.png" style="max-height: 100%;" width="auto" height="50" class="m-0 p-0" />
				<img src="/images/UI/Defensive Measures Add-on Guide.png" style="max-height: 100%;" width="auto" height="33" class="m-0 p-0" />
			</a>

			{{-- Navbar toggler (on small screens) --}}
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			{{-- Navbar contents --}}
			<div class="collapse navbar-collapse" id="navbarContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						@if (\Request::is('/'))
						<span class="nav-link active custom-link">Home</span>
						@else
						<a class="nav-link custom-link" href="{{route('home')}}">Home</a>
						@endif
					</li>

					<li class="nav-item">
						@if(\Request::is('downloads'))
						<span class="nav-link active custom-link">Downloads</span>
						@elseif(\Request::is('downloads/*'))
						<a class="nav-link active custom-link" href="{{route('downloads.index')}}">Downloads</a>
						@else
						<a class="nav-link custom-link" href="{{route('downloads.index')}}">Downloads</a>
						@endif
					</li>

					<li class="nav-item">
						<a class="nav-link custom-link" href="{{route('installation')}}">Installation</a>
					</li>

					<li class="nav-item">
						<noscript>
							<a class="nav-link custom-link" href="">Contents</a>
						</noscript>
						<a class="nav-link custom-link dropdown-toggle js-only" href="#" id="contents" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Contents</a>

						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="contents">
							<a class="dropdown-item custom-link" href="{{route('contents')}}">All</a>
							<hr class="hr-thicc-50 bg-light">
							<a class="dropdown-item custom-link" href="{{route('contents', ['items'])}}">Items</a>
							<a class="dropdown-item custom-link" href="{{route('contents', ['turrets'])}}">Turrets</a>
							<a class="dropdown-item custom-link" href="{{route('contents', ['blocks'])}}">Blocks</a>
							<a class="dropdown-item custom-link" href="{{route('contents', ['projectiles'])}}">Projectiles</a>
						</div>
					</li>
				</ul>
			</div>
		</nav>

		<div class="container-fluid" style="margin-top: 3.75rem;">
			{{-- Page Contents --}}
			@yield('body')
		</div>

		{{-- Footer --}}
		<div class="row justify-content-center footer mx-0 p-3" style="background-color: #444; max-width: 100vw;">
			{{-- Add-On --}}
			<div class="col-12 col-lg-2 order-1 order-lg-0 text-center text-lg-left my-3">
				<h4>Add-On</h4>
				<a href="{{route('downloads.index')}}">Download</a><br>
				<a href="{{route('installation')}}}">Installation</a><br>
			</div>

			{{-- Contents --}}
			<div class="col-12 col-lg-2 order-2 order-lg-1 text-center text-lg-left my-3">
				<h4>Contents</h4>
				<a href="">Items</a><br>
				<a href="">Projectiles</a><br>
				<a href="">Turrets</a><br>
				<a href="">Blocks</a><br>
			</div>

			{{-- About Me --}}
			<div class="col-12 col-lg-2 order-3 order-lg-2 text-center text-lg-left my-3">
				<h4>About Me</h4>
				<a href="https://www.facebook.com/virus5600/"><i class="fab fa-facebook fa-lg mr-3 text-light" title="Facebook"></i>Facebook Page</a><br>
				<a href="https://discord.gg/PCUKucADFr"><i class="fab fa-discord fa-lg mr-3 text-light" title="Discord"></i>Discord Server</a><br>
				<a href="https://github.com/Virus5600/Defensive-Measures/releases" title="GitHub"><i class="fab fa-github fa-lg mr-3 text-light"></i>GitHub Repository</a><br>
				<a href="https://www.youtube.com/channel/UCHqEeEwAszzB8V08LWh1xKQ" title="YouTube"><i class="fab fa-youtube fa-lg mr-3 text-light"></i>YouTube Channel</a><br>
			</div>
			
			{{-- Website --}}
			<div class="col-12 col-lg-2 order-4 order-lg-3 text-center text-lg-left my-3">
				<h4>Website</h4>
				<a href="{{route('privacy-policy')}}">Privacy Policy</a><br>
				<a href="">Terms of Use</a>
			</div>

			{{-- Branding --}}
			<div class="col-12 col-lg-4 order-0 order-lg-4 text-center my-3">
				<img src="/images/UI/Cannon Turret.png" style="max-height: 100%" height="125" width="auto"><br>
				<img src="/images/UI/Defensive Measures Add-On Guide.png" style="max-height: 100%;" height="50" width="auto">
			</div>
		</div>

		{{-- Scripts --}}
		@yield('script')
	</body>
</html>
{{--
	TYPES OF WEAPON:

	Projectile
	Missile
	Energy
	Incendiary
--}}