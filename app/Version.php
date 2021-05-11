<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Version extends Model
{
	protected $fillable = [
		'version',
		'type',
		'description',
		'release_date',
		'win10_link',
		'mobile_link',
		'banner'
	];
}