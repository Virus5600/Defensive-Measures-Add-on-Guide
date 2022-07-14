<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carousel extends Model
{
	protected $fillable = [
		'is_link',
		'file',
		'description',
		'status'
	];

	// Custom Functions
	public function getImage() {
		if ($this->is_link)
			return $this->name;
		else
			return asset('images/version_banners/'.$this->name);
	}
}