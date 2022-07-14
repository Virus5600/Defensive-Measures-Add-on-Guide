<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
	protected $fillable = [
		'item_id',
		'description',
		'usage',
		'obtaining',
	];

	// Relationship
	protected function item() { return $this->belongsTo('App\Item'); }
	protected function variants() { return $this->hasMany('App\Variant'); }
}