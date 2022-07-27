<?php

use Illuminate\Database\Seeder;

use App\Item;

class ItemTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Item::create([
			'id' => 1,
			'type' => 'tool',
			'item_name' => 'Turret Remover',
			'is_content' => 1,
			'image' => 1
		]);

		Item::create([
			'id' => 2,
			'type' => 'item',
			'item_name' => 'Iron Nugget',
			'image' => 'https://i.imgur.com/OQe0Y2D.png'
		]);

		Item::create([
			'id' => 3,
			'type' => 'item',
			'item_name' => 'Gold Ingot',
			'image' => 'https://i.imgur.com/zgYnM9q.png'
		]);

		Item::create([
			'id' => 4,
			'type' => 'item',
			'item_name' => 'Redstone Block',
			'image' => 'https://i.imgur.com/mPaQHEK.png'
		]);
	}
}
