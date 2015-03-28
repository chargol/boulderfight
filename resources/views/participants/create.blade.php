@extends('app')

@section('app.content')

	<div class="container">
		<div class="col-sm-8 col-sm-offset-2 text-center">
			<form class="form-lined" action="{{ route('participants.store') }}" method="POST">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<div class="form-group">
					<label for="firstname" class="control-label">Vorname</label>
					<input type="text" class="form-control text-center" id="firstname" name="firstname">
					
					@include ('errors.form', ['attribute' => 'firstname'])
				</div>

				<div class="form-group">
					<label for="lastname" class="control-label">Nachname</label>
					<input type="text" class="form-control text-center" id="lastname" name="lastname">
					@include ('errors.form', ['attribute' => 'lastname'])
				</div>

				<label for="birthday" class="control-label">Geburtstag</label>
				<div class="form-group">
					
					<div class="col-sm-4 text-center">
						<label for="birthday-day" class="control-label">Tag</label>
						<select id="birthday-day" name="birthday-day" class="form-control text-center">
							@for ($i = 1; $i <= 31; $i++)
								<option value="{{ $i }}">{{ $i }}</option>
							@endfor
						</select>
					</div>
					<div class="col-sm-4 text-center">
						<label for="birthday-month" class="control-label">Monat</label>
						<select id="birthday-month" name="birthday-month" class="form-control text-center">
							@for ($i = 1; $i <= 12; $i++)
								<option value="{{ $i }}">{{ $i }}</option>
							@endfor
						</select>
					</div>
					<div class="col-sm-4 text-center">
						<label for="birthday-year" class="control-label">Jahr</label>
						<select id="birthday-year" name="birthday-year" class="form-control text-center">
							@for ($i = 1935; $i <= 2010; $i++)
								<option value="{{ $i }}">{{ $i }}</option>
							@endfor
						</select>
					</div>
				</div>

				<div class="form-group">
					<div class="radio">
						<label>
						    <input type="radio" name="gender" id="gender-man" value="m" checked>
						    Männlich
						</label>
						<label>
						    <input type="radio" name="gender" id="gender-woman" value="w">
						    Weiblich
						</label>
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-6 col-sm-offset-3">
						<label for="points" class="control-label">Getoppte Routen</label>
						<input type="text" class="form-control text-center" id="points" name="points" placeholder="1-100">
						@include ('errors.form', ['attribute' => 'points'])
					</div>
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-default">Teilnehmen</button>
				</div>

			</form>
		</div>
	</div>

@stop