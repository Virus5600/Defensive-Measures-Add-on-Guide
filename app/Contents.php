<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contents extends Model
{
	protected $fillable = [
		'type',
		'content_name',
		'image',
		'has_variants',
		'description',
		'usage',
		'obtaining',
		'crafting_recipe'
	];
}