@extends('template.user')

@section('title', 'Home')

@section('css')
<style type="text/css">
	.carousel img {
		height: 50vh;
		width: auto;
	}
</style>
@endsection

@section('body')
{{-- Carousel --}}
<section class="row">
	<div class="col-10 offset-1">
		<div class="carousel js-only">
			@foreach($carousel as $c)
			<div style="background: #222 url('{{$c->name}}') no-repeat center; background-size: cover;">
				<div class="backdrop-lg-blur opacity-lg-100 opacity-0">
					<img class="mx-auto" src="{{$c->name}}"/>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section>

<section class="container-fluid my-5 p-lg-5 p-3" style="background-color: #303030; border-radius: 10px;">
	{{-- Description --}}
	<div class="row">
		<div class="col">
			<div class="row">
				<div class="col text-center">
					<img src="{{ asset('images/Home/Defensive Measures Add-On Banner.png') }}" class="w-75 cursor-pointer" draggable='false' data-toggle="modal" data-target="#banner-modal">
					
					<div class="modal fade" id="banner-modal" role='dialog' aria-hidden='true' style="background-color: transparent;">
						<div class="modal-dialog modal-xl modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss='modal'>
										<span aria-hidden='true'>&times;</span>
									</button>
								</div>

								<div class="modal-body">
									<img src="{{ asset('images/Home/Defensive Measures Add-On Banner.png') }}" width="100%" draggable='false'/>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col">
					<p class="my-3">
						Defensive Add-on is an add-on that allows players to place defensive turrets and traps to protect 
						themselves, their creations, positions, and so on. The add-on adds Towers, Traps, Entities, Structures, Villager Variants, and Items to the game, which opens a lot of new capabilities, ideas, and creative imaginations for the players to explore.
					</p>
				</div>
			</div>

			<div class="row">
				<div class="col text-center">
					<a href="{{-- route('downloads.changelog', [$latest_version->version]) --}}" class="btn btn-primary circular-border"><i class="fas fa-download mr-2"></i>Download</a>
				</div>
			</div>
		</div>
	</div>

	<hr class="bg-light hr-thicc my-5 my-lg-6">

	{{-- What's New? --}}
	<div class="row">
		<div class="col">
			<h2>What's New?</h2>
			<h4>{{ $latest_version->version }}</h4>
			<div>{!! $latest_version->description !!}</div>

			<div class="text-center">
				<img src="{{$latest_version->banner}}" style="width: 50vw !important;">
			</div>
		</div>
	</div>

	<hr class="bg-light hr-thicc my-5 my-lg-6">
	
	{{-- Recent Facebook Videos --}}
	<h2>Recent Facebook Videos</h2>
	@foreach($videos as $v)
		@if ($vid > count($videos)-4)

			@if ($vid == count($videos)-4)
			<div class="row mb-5">
			@elseif ($vid == count ($videos)-3)
			<div class="row my-5">
			@else
			<div class="row mt-5">
			@endif

			<div class="col">
				<h4 class="text-light">{{$v['title']}}</h4>
				<div class="text-center">
					<video src="{{$v['source']}}" class="w-100 w-md-50" controls></video>
				</div>
				<p class="text-light">{{$v['description']}}</p>
			</div>
		</div>
		@endif
	@php($vid++)
	@endforeach
	<div class="row">
		<div class="col text-center">
			<a href="https://www.facebook.com/virus5600/" class="btn btn-primary circular-border"><i class="fab fa-facebook-f text-white mr-2"></i>Visit my Facebook Page</a>
		</div>
	</div>

	<hr class="bg-light hr-thicc my-5 my-lg-6">

	<div class="row">
		<div class="col text-center">
			<h2>Submit Bug Report or Suggestion</h2><br>
			<div class="row">
				<div class="col-6">
					<p>
						<b>Bug Report Format:</b><br>
						<br>
						[Title]<br>
						[Describe the bug]<br>
						[Steps to re-create the bug]<br>
						[Minecraft Version and Platform (Win10/PE)]<br>
					</p>
				</div>

				<div class="col-6">
					<p>
						<b>Features/Enhancement Format:</b><br>
						<br>
						[Feature/Enhancement]<br>
						[Describe what it is and what is does]<br>
					</p>
				</div>
			</div>
			<br>
			
			{{-- Discord Embed --}}
			<div class="embed-responsive embed-responsive-21by9 h-100vh h-md-auto">
				<iframe class="embed-responsive-item" title='Discord DMA' src="https://titanembeds.com/embed/788405566250680331?css=0&defaultchannel=788409927915012156&fixedsidenav=true&scrollbartheme=dark&theme=DiscordDark&userscalable=false&css=1" frameborder="1"></iframe><br>
			</div>
			<br>
			<h2>OR</h2>
			<br>
			<a href="https://discord.gg/gqWF7e8XuG" class="btn btn-primary circular-border"><i class="fab fa-discord mr-2"></i>Join our Discord</a>
		</div>
	</div>
</section>
@endsection

@section('script')
<script type="text/javascript">
	$(document).ready(function() {
		$('.carousel').slick({
			autoplay: true,
			infinite: true,
			autoplaySpeed: 5000,
			arrows: true,
			dots: true,
			draggable: false,
			pauseOnHover: true
		});
	});
</script>
@endsection