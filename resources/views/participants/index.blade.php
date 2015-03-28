@extends('app')

@section('app.content')
	<div class="container">
		
		<div class="row">
			
			<div class="col-sm-6">
				<h3 class="group-title">Männer ({{ $males->count() }})</h3>
				@foreach ($males as $male)
					@include('partials.position-box', ['person' => $male])
				@endforeach
			</div>

			<div class="col-sm-6">
				<h3 class="group-title">Frauen ({{ $females->count() }})</h3>
				@foreach ($females as $female)
					@include('partials.position-box', ['person' => $female])
				@endforeach
			</div>

		</div>

	</div>
@stop