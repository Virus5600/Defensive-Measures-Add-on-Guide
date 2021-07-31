<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Variants extends Model
{
	protected $fillable = [
		'content_id',
		'variant_id',
		'name',
		'image'
	];
}