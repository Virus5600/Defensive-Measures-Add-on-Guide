<!DOCTYPE html>
<html lang="en_US">
	<head>
		<title>DMA Guide | @yield('title')</title>

		{{-- META DATA --}}
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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

		{{-- jQuery 3.6.0 --}}
		<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

		{{-- popper.js 1.16.0 --}}
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

		{{-- Bootstrap 4.4 --}}
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

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
		<script type="text/javascript" src="https://virus5600.github.io/Random-Developments/smooth-scroll.js"></script>

		{{-- Local CSS --}}
		<link rel="stylesheet" href="/css/style.css" type="text/css"/>

		{{-- Custom CSS --}}
		@yield('css')

		{{-- Favicon --}}
		<link rel='icon' type='image/png' href='/images/UI/Cannon Turret.png'>
	</head>

	<body class="bg-dark" style="background-color: #222 !important;">
		<noscript>
			<style type="text/css">
				.js-only {
					display: none!important;	/* Make the element disappear if JavaScript isn't allowed */
				}
			</style>
		</noscript>
		<div>
			{{-- Navigation Bar --}}
			<nav class="navbar navbar-expand navbar-dark py-0 px-3 shadow" style="background-color: #444; z-index: 9999">
				{{-- Branding --}}
				<a class="navbar-brand m-0" href="{{route('home')}}">
					<img src="/images/UI/Cannon Turret.png" style="max-height: 100%;" width="auto" height="50" class="m-0 p-0" />
					<img src="/images/UI/Defensive Measures Add-on Guide.png" style="max-height: 100%;" width="auto" height="33" class="m-0 p-0" />
				</a>

				{{-- Navbar toggler (on small screens) --}}
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="#navbar" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				{{-- Navbar contents --}}
				<div class="collapse navbar-collapse" id="navbar">
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
								<a class="dropdown-item custom-link" href="">Items</a>
								<a class="dropdown-item custom-link" href="">Projectiles</a>
								<a class="dropdown-item custom-link" href="">Turrets</a>
								<a class="dropdown-item custom-link" href="">Blocks</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>

			<div class="container-fluid">
				{{-- Page Contents --}}
				@yield('body')

				{{-- Footer --}}
				<div class="row justify-content-center p-3 footer" style="background-color: #444;">
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