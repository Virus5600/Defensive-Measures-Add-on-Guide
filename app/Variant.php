<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Variant extends Model
{
	protected $fillable = [
		'content_id',
		'name',
		'image'
	];

	// Relationship
	protected function content() { $this->belongsTo('App\Content"); }
}