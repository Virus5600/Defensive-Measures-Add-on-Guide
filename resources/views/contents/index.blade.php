@extends('template.user')

@section('title', 'Installation Guide')

@section('css')
<style type="text/css">
	img.img-fluid.w-100[draggable=false] {
		margin-top: 1rem;
		margin-bottom: 1rem;
	}
</style>
@endsection

@section('body')
@php ($type = \Request::has('type') ? \Request::get('type') : $type)

<div class="container-fluid my-5 p-lg-5 p-3" style="background-color: #303030; border-radius: 10px;">
	{{-- ITEMS --}}
	<div class="row">
		<div class="col">
			<h2 class="h3 h2-lg">Items</h2>
			
			<div class="row">
			</div>
			
			<p class="text-right"><a href="{{route('contents', ['items'])}}" class="btn btn-primary text-white">View More &gt;</a></p>
		</div>
	</div>

	{{-- TURRETS --}}
	<div class="row">
		<div class="col">
			<h2 class="h3 h2-lg">Turrets</h2>

			<div class="row">
			</div>

			<p class="text-right"><a href="{{route('contents', ['turrets'])}}" class="btn btn-primary text-white">View More &gt;</a></p>
		</div>
	</div>

	{{-- BLOCKS --}}
	<div class="row">
		<div class="col">
			<h2 class="h3 h2-lg">Blocks</h2>

			<div class="row">
			</div>

			<p class="text-right"><a href="{{route('contents', ['blocks'])}}" class="btn btn-primary text-white">View More &gt;</a></p>
		</div>
	</div>

	{{-- PROJECTILES --}}
	<div class="row">
		<div class="col">
			<h2 class="h3 h2-lg">Projectiles</h2>

			<div class="row">
			</div>

			<p class="text-right"><a href="{{route('contents', ['projectiles'])}}" class="btn btn-primary text-white">View More &gt;</a></p>
		</div>
	</div>
</div>
@endsection

@section('script')
@endsection