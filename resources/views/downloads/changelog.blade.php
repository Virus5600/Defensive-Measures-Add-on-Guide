@extends('template.user')

@section('title')
Changelog {{ $version }}
@endsection

@section('css')
@endsection

@section('body')
{{-- Banner --}}
<div class="row">
	<div class="col py-7" style="background: #222 url('/images/Downloads/Downloads Banner.jpg') no-repeat center; background-size: cover;">
		<!-- <img src="/images/Downloads/Downloads Banner.jpg" width="100%" /> -->
	</div>
</div>

<div class="container-fluid my-5 p-5" style="background-color: #303030; border-radius: 10px;">
	<div class="row">
		<div class="col">
			<h2>{{ $version }}</h2>
			<h4>Dec 18, 2020{{-- $version_date --}}</h4>
		</div>
	</div>

	<hr class="bg-light hr-thicc my-5">

	<div class="row my-5">
		<div class="col">
			<h4>What's New?</h4>
			<p>
				{{-- $version_description --}}
				A new update has been released! A new turret, items and even block was implemented and will surely help defend your area!<br>
				<br>
				I present to you the Ballista! A medieval siege weapon that shoots large bolts of arrow towards enemy. The Ballista shoots much faster than the Cannon Turret, but has less health and deals less damage. The cheap crafting recipe of this turret allows you to create an early defense system for your world, in a sense, the durability of this turret is also lower than that of iron-clad Cannon Turret.
			</p>

			<div class="text-center">
				{{-- $featured_image --}}
				<img src="https://i.imgur.com/YGaoKNI.gif" style="width: 50vw !important;">
			</div>
		</div>
	</div>

	<hr class="bg-light hr-thicc my-5">

	<div class="row my-5">
		<div class="col">
			<h4>Changelog</h4>
			<div class="changelog">
				<span class="add"><i class="fas fa-circle mr-2"></i>Added Ballista Arrow projectile for Ballista's projectile</span><br>
				<span class="add"><i class="fas fa-circle mr-2"></i>Added "Ballista"</span><br>
				<span class="add"><i class="fas fa-circle mr-2"></i>Added "Ballista Arrow Head" block</span><br>
				<span class="add"><i class="fas fa-circle mr-2"></i>Added Ballista Arrow's animation</span><br>
				<span class="add"><i class="fas fa-circle mr-2"></i>Added "Ballista Base" crafting recipe</span><br>
				<span class="add"><i class="fas fa-circle mr-2"></i>Added "Ballista Base with Stand" crafting recipe</span><br>
				<span class="add"><i class="fas fa-circle mr-2"></i>Added "Ballista Bow" crafting recipe</span><br>
				<span class="add"><i class="fas fa-circle mr-2"></i>Added "Ballista Arrow Head" crafting recipe</span><br>
				<span class="add"><i class="fas fa-circle mr-2"></i>Added "Ballista Arrow" crafting recipe</span><br>
				<span class="add"><i class="fas fa-circle mr-2"></i>Added "Ballista" crafting recipe</span><br>
				<span class="mod"><i class="fas fa-circle mr-2"></i>Reverts the custom projectile (Ballista Arrow) to its old projectile (Arrow)</span><br>
			</div>
		</div>
	</div>

	<div class="row my-5">
		<div class="col">
			<h4>Download Links</h4>
			<span>Defensive Measures Add-on (Win 10): <a href='http://extrecey.com/24jv' target="_tab">Mediafire</a></span><br>
			<span>Defensive Measures Add-on (Mobile): <a href='http://extrecey.com/24ap' target="_tab">Mediafire</a></span><br>
			<small>
				<small>
					<b>NOTE:</b> The link opens a new tab redirecting to adfly while this tab redirects to the installation
					guide. Just click the "Skip Ad" button to proceed to the mediafire download page. The adfly redirect helps
					me earn and continue to develop the add-on! Thank you!
				</small>
			</small>
		</div>
	</div>
</div>
@endsection

@section('script')
<script type="text/javascript">
	$(document).ready(function() {
		$('.redirect-to-installation').click(function() {
			$(window).attr('location', '{{route("installation")}}');
		});
	});
</script>
@endsection