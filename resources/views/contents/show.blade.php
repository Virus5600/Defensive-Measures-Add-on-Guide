@extends('template.user')

@section('title', 'Contents - ' . $item->item_name)

@section('css')
<style type="text/css">
	.btn-group > .btn { margin-left: 0!important; }
	.btn-group > .btn:first-child { border-bottom-left-radius: 0!important; }
	.btn-group > .btn:nth-last-child(2) { border-top-right-radius: 0.25rem!important; }
	.btn-group > .btn:last-child { border-radius: 0!important; }

	ol {
		list-style: none;
		counter-reset: item;
		margin-left: 0;
		padding-left: 0;
	}
	ol > li {
		margin-bottom: .5rem;
	}
	ol > li:before {
		display: inline-block;
		content: counter(item, decimal) ')';
		counter-increment: item;
		width: 2em;
	}

	@media (min-width: 550px) {
		.btn-group > .btn:first-child { border-bottom-left-radius: 0!important; }
		.btn-group > .btn:nth-last-child(2) { border-top-right-radius: 0!important; }
		.btn-group > .btn:last-child { border-bottom-right-radius: 0!important; }
	}
</style>
@endsection

@section('body')
<section>
	<div class="container-fluid pb-0 mb-0 d-flex justify-content-center px-0">
		<div class="d-flex flex-wrap d-md-inline-flex btn-group w-100">
			<a href="{{route('contents', ['all'])}}" class="btn btn-primary text-white">All</a>
			<a href="{{route('contents', ['items'])}}" class="btn btn-primary text-white">Items</a>
			<a href="{{route('contents', ['tools'])}}" class="btn btn-primary text-white">Tools</a>
			<a href="{{route('contents', ['turrets'])}}" class="btn btn-primary text-white">Turrets</a>
			<a href="{{route('contents', ['blocks'])}}" class="btn btn-primary text-white">Blocks</a>
			<a href="{{route('contents', ['projectiles'])}}" class="btn btn-primary text-white">Projectiles</a>
		</div>
	</div>

	<div class="container-fluid mb-5 p-lg-5 p-3 mt-0" style="background-color: #303030; border-radius: 10px; border-top-left-radius: 0; border-top-right-radius: 0;">
		<h3 class="text-lg-left text-center">{{ $item->item_name }}</h3>

		<div class="row mt-4">
			<div class="col-12 col-lg-9 order-1 order-lg-0 mt-4 mt-lg-0">
				<div class="d-flex flex-column mb-3">
					<h4>Contents</h4>
					<ol>
						<li><a href="#description" class="text-white">Description</a></li>
						<li><a href="#usage" class="text-white">Usage</a></li>
						<li><a href="#obtaining" class="text-white">Obtaining</a></li>
						<li><a href="#recipe" class="text-white">Crafting Recipe</a></li>
					</ol>
				</div>

				<div id="description">
					<h4>Description</h4>
					{!! $item->description !!}
				</div>

				<hr class="hr-thicc-50 my-5 border-light">

				<div id="usage">
					<h4>Usage</h4>
					<ul>
						{!! $item->usage !!}
					</ul>
				</div>

				<hr class="hr-thicc-50 my-5 border-light">

				<div id="obtaining">
					<h4>Obtaining</h4>
					<ul>
						{!! $item->obtaining !!}
					</ul>
				</div>
			</div>

			<div class="col-12 col-lg-3 order-0 order-lg-1 d-flex justify-content-center">
				<div class="flex-shrink-1">
					<div class="text-center border rounded-lg border-dark item-bg text-dark" style="max-width: calc(0.625rem + 0.5rem + 256px);">
						<div>
							<img src="{{asset('images/contents/'.$item->type.'/'.$item->image)}}" class="img-fluid item-large-container item-image m-2" draggable='false' id="item-image"/>
						</div>
						
						<div class="d-flex flex-row justify-content-center flex-wrap mb-2 px-1" id="item-thumbnail-list">
							<img class="item-thumbnail item-container cursor-pointer active" src="{{asset('images/contents/'.$item->type.'/'.$item->image)}}" draggable='false' data-minetip="{{ $item->item_name }}"/>
							<img class="item-thumbnail item-container cursor-pointer" src="{{asset('images/contents/'.$item->type.'/'.(preg_replace('/v1.1/', 'v1.0',$item->image)))}}" draggable='false' data-minetip="{{ (preg_replace('/v1.1/', 'v1.0',$item->image)) }}"/>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="minetip-tooltip">
		<span class="minetip-title" id="minetip-text">Minecraft Tip</span>
	</div>
</section>
@endsection

@section('script')
<script type="text/javascript">
	function activeSelectedItem(list, element, display) {
		list.removeClass('active');
		element.addClass('active');
		
		display.fadeTo(250, 0, function() {
			setTimeout(500, display.fadeTo(250, 1));
			display.attr('src', element.attr('src'));
		});
	}

	function activeNextElement(list, display) {
		let currentIndex = 0;

		list.each((i, v) => { 
			if ($(v).hasClass('active')) {
				currentIndex = i;
				return;
			}
		});

		if ((currentIndex+1) >= list.length)
			currentIndex = 0;
		else
			currentIndex += 1;

		list.removeClass('active');
		$(list.get(currentIndex)).addClass('active');

		display.fadeTo(250, 0, function() {
			setTimeout(500, display.fadeTo(250, 1));
			display.attr('src', $(list.get(currentIndex)).attr('src'));
		});
	}

	$(document).ready(() => {
		let ii = $('#item-image');
		let itli = $('#item-thumbnail-list > img.item-thumbnail');

		itli.on('click', function (e) {
			let obj = $(this);
			activeSelectedItem(itli, obj, ii);
		});

		var carousel = setInterval(function() {
			activeNextElement(itli, ii);
		}, 10000);
	});
</script>
@endsection