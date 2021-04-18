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
<div class="row">
	<div class="col-10 offset-1">
		{{-- If JavaScript isn't enabled, don't display the carousel and display a plea for the user to enable/allow it. --}}
		<noscript>
			<h3 class="my-3">Please enable or allow JavaScript to view the images.</h3>
		</noscript>

		<div class="carousel js-only">
			<div style="background: #222 url('https://i.imgur.com/oBUJhfG.gif') no-repeat center; background-size: cover;">
				<div class="backdrop-blur">
					<img class="mx-auto" src="https://i.imgur.com/oBUJhfG.gif"/>
				</div>
			</div>
			
			<div style="background: #222 url('https://i.imgur.com/FuNB4rV.png') no-repeat center; background-size: cover;">
				<div class="backdrop-blur">
					<img class="mx-auto" src="https://i.imgur.com/FuNB4rV.png"/>
				</div>
			</div>
			
			<div style="background: #222 url('https://i.imgur.com/YGaoKNI.gif') no-repeat center; background-size: cover;">
				<div class="backdrop-blur">
					<img class="mx-auto" src="https://i.imgur.com/YGaoKNI.gif"/>
				</div>
			</div>
			
			<div style="background: #222 url('https://i.imgur.com/XvkAT5Q.gif') no-repeat center; background-size: cover;">
				<div class="backdrop-blur">
					<img class="mx-auto" src="https://i.imgur.com/XvkAT5Q.gif"/>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid my-5 p-5" style="background-color: #303030; border-radius: 10px;">

	{{-- Description --}}
	<div class="row">
		<div class="col">
			<div class="row">
				<div class="col text-center">
					<img src="/images/Home/Defensive Measures Add-On Banner.png"/ width="75%" draggable='false' data-toggle="modal" data-target="#banner-modal">
					
					<div class="modal fade" id="banner-modal" role='dialog' aria-hidden='true' style="background-color: transparent;">
						<div class="modal-dialog modal-xl" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss='modal'>
										<span aria-hidden='true'>&times;</span>
									</button>
								</div>

								<div class="modal-body">
									<img src="/images/Home/Defensive Measures Add-On Banner.png" width="100%" draggable='false'/>
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
					<a href="{{ route('downloads.changelog', ['v1.0.1-beta']) }}" class="btn btn-primary circular-border"><i class="fas fa-download mr-2"></i>Download</a>
				</div>
			</div>
		</div>
	</div>

	<hr class="bg-light hr-thicc my-6">

	{{-- What's New? --}}
	<div class="row">
		<div class="col">
			<h2>What's New?</h2>
			<h4>v1.0.1-beta</h4> {{-- $latest_version --}}
			<p>
				{{-- $latest_version_description --}}
				A new update has been released! A new turret, items and even block was implemented and will surely help defend your area!<br>
				<br>
				I present to you the Ballista! A medieval siege weapon that shoots large bolts of arrow towards enemy. The Ballista shoots much faster than the Cannon Turret, but has less health and deals less damage. The cheap crafting recipe of this turret allows you to create an early defense system for your world, in a sense, the durability of this turret is also lower than that of iron-clad Cannon Turret.
			</p>

			{{-- $latest_version_link --}}
			<div class="text-center">
				<img src="https://i.imgur.com/YGaoKNI.gif" style="width: 50vw !important;">
			</div>
		</div>
	</div>

	<hr class="bg-light hr-thicc my-6">
	
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
						<video src="{{$v['source']}}" class="w-50" controls></video>
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

	<hr class="bg-light hr-thicc my-6">

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
			<div class="embed-responsive embed-responsive-21by9">
				<iframe class="embed-responsive-item" title='Discord DMA' src="https://titanembeds.com/embed/788405566250680331?css=0&defaultchannel=788409927915012156&fixedsidenav=true&scrollbartheme=dark&theme=DiscordDark&userscalable=false" frameborder="0"></iframe><br>
			</div>
			<br>
			<h2>OR</h2>
			<br>
			<a href="https://discord.gg/gqWF7e8XuG" class="btn btn-primary circular-border"><i class="fab fa-discord mr-2"></i>Join our Discord</a>
		</div>
	</div>
</div>
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