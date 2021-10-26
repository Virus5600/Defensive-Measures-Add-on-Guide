@extends('template.user')

@section('title', 'Admin Login')

@section('css')
<style type="text/css">
	#body {
		background-image: url('/images/Home/Defensive Measures Add-On Banner.png');
		background-repeat: no-repeat;
		background-size: cover;
		background-position: center;
		z-index: -1;
	}

	#body > *:not(nav),
	.blurrer ~* {
		z-index: 2;
	}

	#content-wrapper {
		display: flex;
		flex-direction: row;
	}

	.blurrer {
		position: absolute;
		width: 100%;
		height: 100%;
		top: 0;
		left: 0;
		background-color: rgba(75, 75, 75, 0.55);
		z-index: 0;
	}

	#footer {
		display: none;
	}

	@media (min-width: 992px) {
		#footer {
			display: flex;
		}
	}
</style>
@endsection

@section('body')
<div class="blurrer"></div>

<div class="container-fluid d-flex flex-column">
	<div class="d-flex flex-row my-auto">
		<div class="col-12 col-md-6 col-lg-4 offset-md-1">
			<div class="card" style="background-color: #303030;">
				<h5 class="card-title text-center my-3">Admin Login</h5>
				<hr class="my-0" style="background-color: #ccc;">

				{{-- FORM --}}
				<form class="card-body" action="{{ route('auth') }}" method="POST" enctype="multipart/form-data">
					{{ csrf_field() }}
					
					<span class="text-center ml-auto badge badge-danger w-100">{{Session::get('flash_error')}}</span>
					
					<div class="form-group">
						<label class="form-label" for="username">Username</label>
						<input type="text" name="username" id="username" class="form-control" value="{{old('username')}}"/>
					</div>

					<div class="form-group">
						<label class="form-label" for="password">Password</label>
						<input type="password" name="password" id="password" class="form-control"/>
					</div>
					
					<div class="d-flex">
						<input type="submit" class="btn btn-primary mx-auto">
					</div>
				</form>
				{{-- FORM END --}}
			</div>
		</div>
	</div>
</div>
@endsection