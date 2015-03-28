<?php namespace Boulderfight\Http\Controllers;

use Boulderfight\Http\Controllers\Controller;
use Boulderfight\Http\Requests;
use Boulderfight\Http\Requests\ParticipantCreateRequest;
use Boulderfight\Http\Requests\PointsUpdateRequest;
use Boulderfight\Participant;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ParticipantController extends Controller {

	public function storeCheck(PointsUpdateRequest $request, $id)
	{
		$participant = Participant::find($id);
		$participant->points = $request['points'];
		$participant->save();

		if ($participant->age() < 18) {
			return redirect()->route('participants.youths');	
		} 
		
		return redirect()->route('participants.adults');
	}

	public function check($id)
	{
		$participant = Participant::find($id);

		return view('participants.check', compact('participant'));

	}

	public function adults()
	{
		$females = Participant::female()->adult()->orderBest()->get();
		$males = Participant::male()->adult()->orderBest()->get();

		return view('participants.index', compact('males', 'females'));

	}

	public function youths()
	{
		$females = Participant::female()->youth()->orderBest()->get();
		$males = Participant::male()->youth()->orderBest()->get();

		return view('participants.index', compact('males', 'females'));

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
		
		$check = Participant::where('lastname', $request['lastname'])
								->where('firstname', $request['firstname'])
								->where('birthday', $request['birthday']->toDateString())
								->where('gender', $request['gender'])
								->get();


		if ($check->count() > 0) {
			return redirect()->route('participants.check', $check->first()->id);
		}

		$participant = Participant::create($request->all());

		if ($participant->age() < 18) {
			return redirect()->route('participants.youths');	
		} 
		
		return redirect()->route('participants.adults');	
		

		
	}

}
