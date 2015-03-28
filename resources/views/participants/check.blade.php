@extends('app')

@section('app.content')
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2 class="group-title">Vorhandenen Datensatz ist bereits vorhanden. <br> Punkte überschreiben?</h2>
			</div>	
		</div>

		<div class="row">

			<div class="col-sm-8 col-sm-offset-2 text-center">
				<form class="form-lined" action="{{ route('participants.storeCheck', $participant->id) }}" method="POST">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">

					<div class="form-group">
						<label for="firstname" class="control-label">Vorname</label>
						<p class="staticText">{{ $participant->firstname }}</p>
					</div>
					
					<div class="form-group">
						<label for="lastname" class="control-label">Nachname</label>
						<p class="staticText">{{ $participant->lastname }}</p>
					</div>
					
					<div class="form-group">
						<label for="birthday" class="control-label">Geburtstag</label>
						<p class="staticText">
							{{ $participant->birthday->day }}.{{ $participant->birthday->month }}.{{ $participant->birthday->year }}
						</p>
					</div>

					<div class="form-group">
						<label for="points" class="control-label">Gespeicherte Routen</label>
						<p class="staticText">
							{{ $participant->points }}
						</p>
					</div>
					
					<div class="form-group">
						<div class="col-sm-6 col-sm-offset-3">
							<label for="points" class="control-label">Neue Routen</label>
							<input type="text" class="form-control text-center" id="points" name="points" placeholder="1-100">
							@include ('errors.form', ['attribute' => 'points'])
						</div>
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-default">Punkte ändern</button>
						<a href="{{ route('participants.create') }}" class="btn btn-default">Abbrechen</a>
					</div>

				</form>
			</div>

		</div>
	</div>
@stop