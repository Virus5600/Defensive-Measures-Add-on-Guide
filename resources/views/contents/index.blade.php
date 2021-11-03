@extends('template.user')

@section('title', 'Contents')

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
<section class="row">
	<div class="col-4 col-sm-3 col-lg-2 pr-0">
		<div class="btn-group-vertical w-100 h-100">
			<a href="{{route('contents', ['all'])}}" class="btn btn-primary text-white mx-0" style="border-top-right-radius: 0;">All</a>
			<a href="{{route('contents', ['items'])}}" class="btn btn-primary text-white mx-0">Items</a>
			<a href="{{route('contents', ['tools'])}}" class="btn btn-primary text-white mx-0">Tools</a>
			<a href="{{route('contents', ['turrets'])}}" class="btn btn-primary text-white mx-0">Turrets</a>
			<a href="{{route('contents', ['blocks'])}}" class="btn btn-primary text-white mx-0">Blocks</a>
			<a href="{{route('contents', ['projectiles'])}}" class="btn btn-primary text-white mx-0" style="border-bottom-right-radius: 0;">Projectiles</a>
		</div>
	</div>

	<div class="col" style="background-color: #303030;" style="border-top-left-radius: 0; border-bottom-left-radius: 0;">
		<div class="row">
			<div class="col p-3">
				<h3 class="h4 h3-lg">{{ $category }}</h3>
				<hr class="hr-thicc-50 border-light">
				
				<div class="row justify-content-start mt-4 px-3">
					@foreach($contents as $i)
					<a href="{{ route('items', [preg_replace('/\s+/', '_',strtolower($i->item_name))]) }}" class="text-center border rounded-lg border-dark content-item text-dark text-decoration-none" style="width: 100px;">
						<img src="{{asset('images/contents/'.$i->type.'/'.$i->image)}}" class="card-img-top img-fluid item-image item-container" draggable='false' style="width: 75px; height: auto;"/>
						<h6 class="item-name">{{$i->item_name}}</h6>
					</a>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</section>
@endsection