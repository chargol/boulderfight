@extends('app')

@section('app.content')
	<div class="container">
		
		<div class="row">
			
			<div class="col-sm-6 col-sm-offset-3">
				<h3 class="group-title">Jugend ({{ $participants->count() }})</h3>
				@foreach ($participants as $participant)
					@include('partials.position-box', ['person' => $participant])
				@endforeach
			</div>
		</div>

	</div>
@stop