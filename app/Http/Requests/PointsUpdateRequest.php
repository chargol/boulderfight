<?php namespace Boulderfight\Http\Requests;

use Boulderfight\Http\Requests\Request;

class PointsUpdateRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'points' => 'digits_between:1,100|required'
		];
	}

}
