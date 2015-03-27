<?php namespace Boulderfight;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model {

	protected $fillable = ['firstname', 'lastname', 'points', 'birthday', 'gender'];

}
