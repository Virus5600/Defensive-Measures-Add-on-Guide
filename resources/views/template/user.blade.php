<!DOCTYPE html>
<html lang="en">
	<head>
		<title>DMA Guide | @yield('title')</title>

		{{-- META DATA --}}
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		{{-- SITE META --}}
		<meta name="url" content="{{route('home')}}">
		<meta name="type" content="website">
		<meta name="title" content="{{ env('APP_NAME') }}">
		<meta name="description" content="{{ env('APP_DESC') }}">
		<meta name="image" content="{{ URL::asset('images/Home/Defensive Measures Add-On Banner.png') }}">
		<meta name="keywords" content="Defensive, Defensive Measures, Add-on, Defensive Measures Add-on, Wiki, Guide, Defensive Measures Wiki, Defensive Measures Guide, Defensive Measures Add-on Wiki, Defensive Measures Add-on Guide, CodeSenpai, Virus5600, SatchTFF">
		<meta name="application-name" content="Defensive Measures Add-on Guide">
		<meta name="author" content="Virus5600">

		{{-- TWITTER META --}}
		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:title" content="{{ env('APP_NAME') }}">
		<meta name="twitter:description" content="{{ env('APP_DESC') }}">
		<meta name="twitter:image" content="{{Request::url()}}/images/Home/Defensive Measures Add-On Banner.png">

		{{-- OG META --}}
		<meta name="og:url" content="{{route('home')}}">
		<meta name="og:type" content="website">
		<meta name="og:title" content="{{ env('APP_NAME') }}">
		<meta name="description" content="{{ env('APP_DESC') }}">
		<meta name="og:image" content="{{ URL::asset('images/Home/Defensive Measures Add-On Banner.png') }}">

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

		{{-- Fontawesome --}}
		<script src="https://kit.fontawesome.com/d4492f0e4d.js" crossorigin="anonymous"></script>

		{{-- FONT: Minecraftia --}}
		<link rel="stylesheet" media="screen" href="https://fontlibrary.org//face/minecraftia" type="text/css"/>

		{{-- Removes the code that shows up when script is disabled/not allowed/blocked --}}
		<script type="text/javascript" id="for-js-disabled-js">$('head').append('<style id="for-js-disabled">#js-disabled { display: none; }</style>');$(document).ready(function() {$('#js-disabled').remove();$('#for-js-disabled').remove();$('#for-js-disabled-js').remove();});</script>

		{{-- Minetip 0.1.0 --}}
		<link rel="stylesheet" type="text/css" href="{{ asset('css/minetip.css') }}">
		<script type="text/javascript" src="{{ asset('js/minetip.js') }}"></script>

		{{-- Local CSS --}}
		<link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css"/>

		{{-- Custom CSS --}}
		@yield('css')

		{{-- Favicon --}}
		<link rel='icon' type='image/png' href='{{ asset("images/UI/Cannon Turret.png") }}'/>
	</head>

	<body class="bg-dark" style="background-color: #222 !important;" id="body">
		{{-- SHOWS THIS INSTEAD WHEN JAVASCRIPT IS DISABLED --}}
		<div style="position: absolute; height: 100vh; width: 100vw; background-color: #ccc;" id="js-disabled">
			<style type="text/css">
				/* Make the element disappear if JavaScript isn't allowed */
				.js-only {
					display: none!important;
				}
			</style>
			<div class="row h-100">
				<div class="col-12 col-md-4 offset-md-4 py-5 my-auto">
					<div class="card shadow my-auto">
						<h4 class="card-header card-title text-center">Javascript is Disabled</h4>

						<div class="card-body">
							<p class="card-text">This website required <b>JavaScript</b> to run. Please allow/enable JavaScript and refresh the page.</p>
							<p class="card-text">If the JavaScript is enabled or allowed, please check your firewall as they might be the one disabling JavaScript.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="d-flex flex-column min-vh-100 js-only">
			{{-- Navigation Bar --}}
			<nav class="navbar navbar-expand-lg navbar-dark py-0 px-0 px-lg-3 shadow fixed-top" style="background-color: #444;">
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
							<a class="nav-link active custom-link" href="{{ route('downloads.index') }}">Downloads</a>
							@else
							<a class="nav-link custom-link" href="{{ route('downloads.index') }}">Downloads</a>
							@endif
						</li>

						<li class="nav-item">
							@if(\Request::is('installation'))
							<span class="nav-link active custom-link">Installation</span>
							@elseif(\Request::is('installation/*'))
							<a class="nav-link active custom-link" href="{{ route('installation') }}">Installation</a>
							@else
							<a class="nav-link custom-link" href="{{ route('installation') }}">Installation</a>
							@endif
						</li>

						<li class="nav-item">
							<a class="nav-link custom-link dropdown-toggle js-only" href="#" id="contents" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Contents</a>

							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="contents">
								<a class="dropdown-item custom-link" href="{{ route('contents') }}">All</a>
								<hr class="hr-thicc-50 bg-light">
								<a class="dropdown-item custom-link" href="{{ route('contents', ['items']) }}">Items</a>
								<a class="dropdown-item custom-link" href="{{ route('contents', ['turrets']) }}">Turrets</a>
								<a class="dropdown-item custom-link" href="{{ route('contents', ['blocks']) }}">Blocks</a>
								<a class="dropdown-item custom-link" href="{{ route('contents', ['projectiles']) }}">Projectiles</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>

			<main class="container-fluid flex-grow-1" style="margin-top: 6.5rem; margin-bottom: 4rem;">
				{{-- Page Contents --}}
				@yield('body')
			</main>

			{{-- Footer --}}
			<footer class="row justify-content-center footer mx-0 p-3" style="background-color: #444; max-width: 100vw;">
				{{-- Add-On --}}
				<div class="col-6 col-lg-2 order-1 order-lg-0 text-center text-lg-left my-3">
					<h4>Add-On</h4>
					<a href="{{ route('downloads.index') }}">Download</a><br>
					<a href="{{ route('installation') }}">Installation</a><br>
					<a href="https://github.com/Virus5600/Defensive-Measures/releases">Github Repository</a>
				</div>

				{{-- Contents --}}
				<div class="col-6 col-lg-2 order-2 order-lg-1 text-center text-lg-left my-3">
					<h4>Contents</h4>
					<a href="">Items</a><br>
					<a href="">Projectiles</a><br>
					<a href="">Turrets</a><br>
					<a href="">Blocks</a><br>
				</div>

				{{-- DIVIDER --}}
				<div class="col-12 d-block d-lg-none order-3 order-lg-5">
					<hr class="hr-thicc-50 border-light">
				</div>

				{{-- About Me --}}
				<div class="col-6 col-lg-2 order-4 order-lg-2 text-center text-lg-left my-3">
					<h4>About Me</h4>
					<a href="https://www.facebook.com/virus5600/"><i class="fab fa-facebook fa-lg mr-3 text-light" title="Facebook"></i>Facebook Page</a><br>
					<a href="https://discord.gg/PCUKucADFr"><i class="fab fa-discord fa-lg mr-3 text-light" title="Discord"></i>Discord Server</a><br>
					<a href="https://github.com/Virus5600" title="GitHub"><i class="fab fa-github fa-lg mr-3 text-light"></i>GitHub</a><br>
					<a href="https://www.youtube.com/channel/UCHqEeEwAszzB8V08LWh1xKQ" title="YouTube"><i class="fab fa-youtube fa-lg mr-3 text-light"></i>YouTube Channel</a><br>
				</div>

				{{-- Website --}}
				<div class="col-6 col-lg-2 order-5 order-lg-3 text-center text-lg-left my-3">
					<h4>Website</h4>
					<a href="{{ route('privacy-policy') }}">Privacy Policy</a><br>
					<a href="">Terms of Use</a>
				</div>

				{{-- Branding --}}
				<div class="col-12 col-lg-4 order-0 order-lg-4 text-center my-3">
					<img src="{{ asset('images/UI/Cannon Turret.png') }}" style="max-height: 100%" height="125" width="auto"><br>
					<img src="{{ asset('images/UI/Defensive Measures Add-On Guide.png') }}" style="max-height: 100%;" height="50" width="auto">
				</div>
			</footer>
		</div>

		{{-- Scripts --}}
		@yield('script')
		<script type="text/javascript">
			@if (Session::has('flash_error'))
			Swal.fire({
				{!!Session::has('has_icon') ? "icon: `error`," : ""!!}
				title: `{{Session::get('flash_error')}}`,
				{!!Session::has('message') ? 'html: `' . Session::get('message') . '`,' : ''!!}
				position: {!!Session::has('position') ? '`' . Session::get('position') . '`' : '`top`'!!},
				showConfirmButton: false,
				toast: {!!Session::has('is_toast') ? Session::get('is_toast') : true!!},
				{!!Session::has('has_timer') ? (Session::get('has_timer') ? (Session::has('duration') ? ('timer: ' . Session::get('duration')) . ',' : `timer: 10000,`) : '') : `timer: 10000,`!!}
				background: `#dc3545`,
				customClass: {
					title: `text-white`,
					content: `text-white`,
					popup: `px-3`
				},
			});
			@elseif (Session::has('flash_info'))
			Swal.fire({
				{!!Session::has('has_icon') ? "icon: `info`," : ""!!}
				title: `{{Session::get('flash_info')}}`,
				{!!Session::has('message') ? 'html: `' . Session::get('message') . '`,' : ''!!}
				position: {!!Session::has('position') ? '`' . Session::get('position') . '`' : '`top`'!!},
				showConfirmButton: false,
				toast: {!!Session::has('is_toast') ? Session::get('is_toast') : true!!},
				{!!Session::has('has_timer') ? (Session::get('has_timer') ? (Session::has('duration') ? ('timer: ' . Session::get('duration')) . ',' : `timer: 10000,`) : '') : `timer: 10000,`!!}
				background: `#17a2b8`,
				customClass: {
					title: `text-white`,
					content: `text-white`,
					popup: `px-3`
				},
			});
			@elseif (Session::has('flash_success'))
			Swal.fire({
				{!!Session::has('has_icon') ? "icon: `success`," : ""!!}
				title: `{{Session::get('flash_success')}}`,
				{!!Session::has('message') ? 'html: `' . Session::get('message') . '`,' : ''!!}
				position: {!!Session::has('position') ? '`' . Session::get('position') . '`' : '`top`'!!},
				showConfirmButton: false,
				toast: {!!Session::has('is_toast') ? Session::get('is_toast') : true!!},
				{!!Session::has('has_timer') ? (Session::get('has_timer') ? (Session::has('duration') ? ('timer: ' . Session::get('duration')) . ',' : `timer: 10000,`) : '') : `timer: 10000,`!!}
				background: `#28a745`,
				customClass: {
					title: `text-white`,
					content: `text-white`,
					popup: `px-3`
				},
			});
			@endif
		</script>
	</body>
</html>
{{--
	TYPES OF WEAPON:

	Projectile
	Missile
	Energy
	Incendiary
--}}