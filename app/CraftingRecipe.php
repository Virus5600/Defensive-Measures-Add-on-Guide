<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

use Log;

class CraftingRecipe extends Model
{
	protected $fillable = [
		'for_item',
		'recipe_type',
		'shape',
		'amount'
	];

	// Relationship
	protected function forItem() { $this->belongsTo('App\Item', 'for_item'); }

	// Custom Function
	public static function recipeTypes() {
		return [
			'3-by-3',
			'2-by-2',
			'free-form',
			'furnace'
		];
	}

	public function renderRecipe() {
		$recipe_items_arr = array();
		$recipe_items = '';
		foreach (preg_split('/\\|/', $this->shape) as $rv) {
			foreach (preg_split('/ /', $rv) as $sv) {
				if (array_key_exists($sv, $recipe_items_arr))
					continue;
				else
					$recipe_items_arr[$sv] = Item::find($sv);
			}
		}

		foreach ($recipe_items_arr as $k => $v) {
			if ($k == 0)
				continue;
			$recipe_items .= '"'.$k.'": "'.$v->getImage().'",';
		}
		$recipe_items = substr($recipe_items, 0, strlen($recipe_items)-1);

		$result = Item::find($this->for_item);

		$toRet = '
		<div data-item-recipe>
			{
				"recipe_type": "'.$this->recipe_type.'",
				"recipe": "'.$this->shape.'",
				"recipe_items": {'.
					$recipe_items
				.'},
				"result": "'.$result->getImage().'",
				"amount": "'.$this->amount.'"
			}
		</div>';

		return $toRet;
	}
}