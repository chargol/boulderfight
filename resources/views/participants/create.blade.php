@extends('app')

@section('app.content')

	<div class="container">
		<div class="col-sm-8 col-sm-offset-2 text-center">
			<form class="form-lined" action="{{ route('participants.store') }}" method="POST">

				<div class="form-group">
					<label for="firstname" class="control-label">Vorname</label>
					<input type="text" class="form-control text-center" id="firstname" name="firstname">
				</div>

				<div class="form-group">
					<label for="lastname" class="control-label">Nachname</label>
					<input type="text" class="form-control text-center" id="lastname" name="lastname">
				</div>

				<div class="form-group">
					<label for="birthday" class="control-label">Geburtstag</label>
					<input type="text" class="form-control text-center" id="birthday" name="birthday">
				</div>
				
				<div class="form-group">
					<select id="gender" name="gender">
					 	<option value="none">Geschlecht</option>
					 	<option value="m">Männlich</option>
					 	<option value="w">Weiblich</option>
					</select>
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-default">Teilnehmen</button>
				</div>

			</form>
		</div>
	</div>

@stop