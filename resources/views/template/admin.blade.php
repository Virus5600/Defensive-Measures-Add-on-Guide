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
		<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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

		{{-- Smooth-Scroll.js 1.0 --}}
		<script type="text/javascript" src="https://virus5600.github.io/Random-Developments/Smooth-Scroll-Library/smooth-scroll.js"></script>

		{{-- Removes the code that shows up when script is disabled/not allowed/blocked --}}
		<script type="text/javascript" id="for-js-disabled-js">$('head').append('<style id="for-js-disabled">#js-disabled { display: none; }</style>');$(document).ready(function() {$('#js-disabled').remove();$('#for-js-disabled').remove();$('#for-js-disabled-js').remove();});</script>

		{{-- Local CSS --}}
		<link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css"/>

		{{-- Custom CSS --}}
		@yield('css')

		{{-- Favicon --}}
		<link rel='icon' type='image/png' href='{{ asset("images/UI/Cannon Turret.png") }}'>
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
		
		<main class="d-flex flex-column min-vh-100 js-only">
			{{-- Navigation Bar (TOP) --}}
			<nav class="navbar navbar-expand-lg navbar-dark position-lg-relative dark-shadow py-0 px-3 position-sticky" style="z-index: 1000; background-color: #444;">
				{{-- Navbar Toggler --}}
				<button class="sidebar-toggler" type="button" data-toggle="sidebar-collapse" data-target="#sidebar" aria-controls="sidebar" aria-label="Toggle Sidebar">
					<span class="navbar-toggler-icon"></span>
				</button>

				{{-- Branding --}}
				<a class="navbar-brand m-0" href="{{route('admin.dashboard')}}">
					<img src="/images/UI/Cannon Turret.png" style="max-height: 100%;" width="auto" height="50" class="m-0 p-0" />
					<img src="/images/UI/Defensive Measures Add-on Guide.png" style="max-height: 100%;" width="auto" height="33" class="m-0 p-0" />
				</a>

				{{-- Navbar contents --}}
				<div class="collapse navbar-collapse" id="navbar">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							@if (Auth::check())
							@if (!Auth::user()->is_avatar_link)
								@if (Auth::user()->avatar == null)
								<img src="/uploads/users/default.png" class="circular-border" width='30' height='30' draggable='false' alt="User"/>
								@else
								<img src="/uploads/users/user{{Auth::user()->id}}/{{Auth::user()->avatar}}" class="circular-border" width='30' height='30' draggable='false' alt="User"/>
								@endif
							@endif
							<img src="/uploads/users/default.png" class="circular-border" width='30' height='30' draggable='false' alt="User"/>
							@endif
							<label>
								<div class="dropdown">
									<a href='#' role="button" class="nav-link custom-link dropdown-toggle dynamic-size-lg-h6" style="font-size: 1.25rem;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										@if (Auth::check()){{Auth::user()->first_name}} {{Auth::user()->last_name}}@else{{ 'Test' }}@endif
									</a>
									
									<div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href="{{route('home')}}">View Home Page</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="{{route('logout')}}">Log out</a>
									</div>
								</div>
							</label>
						</li>
					</ul>
				</div>
			</nav>

			<div class="d-flex flex-d-row flex-grow-1" style="overflow: hidden;">
				{{-- Navigation Bar (SIDE) --}}
				<div class="sidebar dark-shadow custom-scroll d-flex flex-d-col py-3 px-0 collapse-horizontal overflow-y-auto" id="sidebar">
					@if (\Request::is('admin/dashboard'))
					<span class="bg-custom text-white"><i class="fas fa-tachometer-alt mr-2"></i>Dashboard</span>
					@else
					<a class="text-decoration-none text-dark" href="{{ route('dashboard') }}"><i class="fas fa-tachometer-alt mr-2"></i>Dashboard</a>
					@endif

					<a class="text-decoration-none text-dark" href="#"><i class="fas fa-sign-out-alt mr-2"></i>Sign Out</a>
				</div>

				{{-- Page Contents --}}
				<div class="content flex-fill">
					<div class="container-fluid my-4">
						@yield('body')
					</div>
				</div>
			</div>
		</main>

		<script type="text/javascript" src="{{ asset('js/admin.js') }}"></script>
	</body>
</html>