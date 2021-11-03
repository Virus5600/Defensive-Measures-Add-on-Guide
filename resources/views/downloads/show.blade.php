@extends('template.user')

@section('title')
Changelog {{ $version }}
@endsection

@section('css')
<style type="text/css">
	.changelog > span > code {
		font-size: 75%;
		font-family: "Minecraftia";
		background-color: rgb(27, 29, 35);
		padding: 0.2em 0.4em;
		border-radius: 6px;
		margin: 0;
	}
</style>
@endsection

@section('body')
{{-- Banner --}}
<section class="row">
	<div class="col py-7" style="background: #222 url('/images/Downloads/Downloads Banner.jpg') no-repeat center; background-size: cover;"></div>
	<!-- <img src="/images/Downloads/Downloads Banner.jpg" width="100%" /> -->
</section>

<section class="container-fluid my-5 p-5" style="background-color: #303030; border-radius: 10px;">
	<div class="row">
		<div class="col">
			<h2>{{ $version->version }}</h2>
			<h4>{{ $version->release_date->format("M d, Y") }}</h4>
		</div>
	</div>

	<hr class="bg-light hr-thicc my-5">

	<div class="row my-5">
		<div class="col">
			<h4>What's New?</h4>
			<div>{!! $version->description !!}</div>

			<div class="text-center">
				<img src="{{$version->banner}}" style="width: 50vw !important;">
			</div>
		</div>
	</div>

	<hr class="bg-light hr-thicc my-5">

	<div class="row my-5">
		<div class="col">
			<h4>Changelog</h4>
			<div class="changelog">
				@foreach($changelog as $c)
				<span class="{{$c->type}}"><i class="fas fa-circle mr-2"></i>{!! $c->changelog !!}</span><br>
				@endforeach
			</div>
		</div>
	</div>

	<div class="row my-5">
		<div class="col">
			<h4>Download Links</h4>
			<span>Defensive Measures Add-on (Win 10): <a href='{{$version->win10_link}}' class="redirect-to-installation" data-type="win10" target="_tab">Mediafire</a></span><br>
			<span>Defensive Measures Add-on (Mobile): <a href='{{$version->mobile_link}}' class="redirect-to-installation" data-type="mobile" target="_tab">Mediafire</a></span><br>
			<small>
				<small>
					<b>NOTE:</b> The link opens a new tab redirecting to <a href="https://cb.click" title="Opens the URL shortener I'm using.">cb.click</a> while this tab redirects to the installation
					guide. Just click the "Continue" button to proceed to the mediafire download page. The <a href="https://cb.click" title="Opens the URL shortener I'm using.">cb.click</a> redirect helps
					me earn and continue to develop the add-on! Thank you!
				</small>
			</small>
		</div>
	</div>
</section>
@endsection

@section('script')
<script type="text/javascript">
	$(document).ready(function() {
		$('.redirect-to-installation').click(function() {
			Swal.fire({
				title: `Still in the downloads page?`,
				html: `If you aren't redirected to the installation page, click <a href="{{route('installation')}}">here</a>`
			});

			$(window).attr('location', '{{ route("installation") }}?type='+$(this).attr('data-type'));
		});
	});
</script>
@endsection