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

<div class="container-fluid my-5 p-5" style="background-color: #303030; border-radius: 10px;">
	<div class="row">
		<div class="col">
			<h2>Beta Versions</h2>
			<p>
				Versions in this category are under development and are very unstable. Create a backup of your world if you wish to activate the beta build of an add-on in your world, or create a new world to play with. Developers will not take responsible for any loss, or corrupted worlds that may happen during the use of the beta builds.
			</p>
		</div>
	</div>

	<div class="row">
		<div class="col">
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<td scope="col">Version</td>
						<td scope="col">Release Date</td>
						<td scope="col"></td>
					</tr>
				</thead>

				<tbody>
					<tr>
						<td><a href="{{ route('downloads.changelog', ['v1.0.1-beta']) }}">v1.0.1-beta</a></td>
						<td>Dec 18, 2020</td>
						<td class="text-right">
							<a href="http://extrecey.com/24jv" target="_blank" class="btn btn-primary circular-border redirect-to-installation"><i class="fas fa-download mr-2"></i>Win 10</a>
							<a href="http://extrecey.com/24ap" target="_blank" class="btn btn-primary circular-border redirect-to-installation"><i class="fas fa-download mr-2"></i>Mobile</a>
							<a href="{{ route('downloads.changelog', ['v1.0.1-beta']) }}" class="btn btn-primary circular-border">Changelog</a>
						</td>
					</tr>

					<tr>
						<td><a href="">v1.0-beta</a></td>
						<td>Dec 15, 2020</td>
						<td class="text-right">
							<a href="http://aspedrom.com/24240885/defensive-measures-add-on-win10" target="_blank" class="btn btn-primary circular-border redirect-to-installation"><i class="fas fa-download mr-2"></i>Win 10</a>
							<a href="http://aspedrom.com/6rDM" target="_blank" class="btn btn-primary circular-border redirect-to-installation"><i class="fas fa-download mr-2"></i>Mobile</a>
							<a href="{{ route('downloads.changelog', ['v1.0-beta']) }}" class="btn btn-primary circular-border">Changelog</a>
						</td>
					</tr>
				</tbody>
			</table>
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