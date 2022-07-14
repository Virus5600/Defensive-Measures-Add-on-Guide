<?php

use Illuminate\Database\Seeder;

use App\CraftingRecipe;

class CraftingRecipeTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		CraftingRecipe::create([
			'for_item' => 1,
			'recipe_type' => '3-by-3',
			'shape' => '0 1 0|2 0 1|3 2 0',
			'amount' => 1
		]);
	}
}