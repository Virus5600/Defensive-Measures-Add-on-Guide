<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
	protected $fillable = [
		'type',
		'is_content',
	];

	// Relationship
	protected function craftingRecipe() {
		return $this->hasMany('App\CraftingRecipe', 'for_item');
	}

	public function getImage() {
		if ($this->is_content)
			return asset('images/contents/'.$this->type.'s/'.$this->image);
		else
			return $this->image;
	}

	public function getContent() {
		if ($this->is_content)
			return Content::where('item_id', '=', $this->id)->first();
		else
			return null;
	}
}