<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
	protected $fillable = [
		'type'
	];

	// RELATIONAL FUNCTION
	protected function getUsers() { $this->hasMany('App\User'); }
}