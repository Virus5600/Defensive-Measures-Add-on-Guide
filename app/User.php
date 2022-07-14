<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'first_name',
        'last_name',
        'middle_name',
        'username',
		'email',
		'password',
		'status',
		'user_type',
	];

	protected $hidden = [
		'password',
		'remember_token',
	];

	// RELATIONAL FUNCTION
	protected function userType() { return $this->belongsTo('App\UserType'); }

    // CUSTOM FUNCTIONS
    public function getName() {
        return $this->first_name . ' ' . $this->last_name;
    }
}