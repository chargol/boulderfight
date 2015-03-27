<?php namespace Boulderfight\Http\Controllers;

use Boulderfight\Http\Controllers\Controller;
use Boulderfight\Http\Requests;
use Boulderfight\Http\Requests\ParticipantCreateRequest;
use Boulderfight\Participant;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ParticipantController extends Controller {

	public function index()
	{
		return Participant::all()->toArray();
	}
	

	/**
	 * Show the form for creating a participant
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('participants.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(ParticipantCreateRequest $request)
	{	
		$request['birthday'] = Carbon::createFromDate($request['birthday-year'], $request['birthday-month'], $request['birthday-day']);
		Participant::create($request->all());

		return redirect()->route('participants.index');
	}

}
