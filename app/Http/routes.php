<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Participant - Routes
Route::get('auswertung/erwachsene', [
	'as' => 'participants.adults',
	'uses' => 'ParticipantController@adults'
]);

Route::get('auswertung/jugend', [
	'as' => 'participants.youths',
	'uses' => 'ParticipantController@youths'
]);

Route::post('mitmachen/aktualisieren/{id}', [
	'as' => 'participants.storeCheck',
	'uses' => 'ParticipantController@storeCheck'
]);

Route::post('mitmachen', [
	'as' => 'participants.store',
	'uses' => 'ParticipantController@store'
]);

Route::get('mitmachen/aktualisieren/{id}', [
	'as' => 'participants.check',
	'uses' => 'ParticipantController@check'
]);

Route::get('mitmachen', [
	'as' => 'participants.create',
	'uses' => 'ParticipantController@create'
]);

Route::get('/', function (){
	return redirect()->route('participants.create');
});
