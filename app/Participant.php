<?php namespace Boulderfight;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model {

	protected $fillable = ['firstname', 'lastname', 'points', 'birthday', 'gender'];

	public function scopeMale($query)
	{
		return $query->whereGender('m');
	}

	public function scopeFemale($query)
	{
		return $query->whereGender('w');
	}

	public function scopeAdult($query)
	{
		return $query->where('birthday', '<=', Carbon::now()->subYears(17));
	}

	public function scopeYouth($query)
	{
		return $query->where('birthday', '>', Carbon::now()->subYears(17));
	}

	public function scopeOrderBest($query)
	{
		return $query->orderBy('points', 'desc')->orderBy('lastname')->orderBy('firstname');
	}
	

	public function age()
	{
		return Carbon::now()->diffInYears($this->birthday);
	}
	

	public function getDates()
	{
		return ['created_at', 'updated_at', 'birthday'];
	}
	



}
