@extends('template.user')

@section('title', 'Downloads')

@section('css')
@endsection

@section('body')
{{-- Banner --}}
<div class="row">
	<div class="col py-7" style="background: #222 url('/images/Downloads/Downloads Banner.jpg') no-repeat center; background-size: cover;">
		<!-- <img src="/images/Downloads/Downloads Banner.jpg" width="100%" /> -->
	</div>
</div>

<div class="container-fluid my-5 p-lg-5 p-3" style="background-color: #303030; border-radius: 10px;">
	@if (count($versions->where('type', 'beta')) > 0)
	<div class="row">
		<div class="col">
			<h2>Beta Versions</h2>
			<p>
				Versions in this category are under development and are very unstable. Create a backup of your world if you wish to activate the beta build of an add-on in your world, or create a new world to play with. Developers will not take responsible for any loss, or corrupted worlds that may happen during the use of the beta builds.
			</p>
		</div>
	</div>

	<div class="row">
		<div class="col overflow-x-auto">
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<td scope="col">Version</td>
						<td scope="col">Release Date</td>
						<td scope="col"></td>
					</tr>
				</thead>

				<tbody>
					@foreach ($versions->where('type', 'beta') as $v)
					<tr>
						<td><a href="{{ route('downloads.changelog', [$v->version]) }}">{{$v->version}}</a></td>
						<td>{{$v->release_date->format("M d, Y")}}</td>
						<td class="text-right d-flex flex-d-row">
							<a href="{{$v->win10_link}}" target="_blank" class="ml-auto mx-1 btn btn-primary btn-sm circular-border redirect-to-installation"><i class="fas fa-download mr-2"></i>Win 10</a>
							<a href="{{$v->mobile_link}}" target="_blank" class="mx-1 btn btn-primary btn-sm circular-border redirect-to-installation"><i class="fas fa-download mr-2"></i>Mobile</a>
							<a href="{{ route('downloads.changelog', [$v->version]) }}" class="mx-1 btn btn-primary btn-sm circular-border">Changelog</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
	@endif
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