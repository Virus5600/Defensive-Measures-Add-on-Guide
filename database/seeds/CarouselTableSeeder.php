<?php

use Illuminate\Database\Seeder;

use App\Carousel;

class CarouselTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Carousel::create([
			'is_link' => 1,
			'file' => 'https://i.imgur.com/oBUJhfG.gif',
			'status' => 1
		]);

		Carousel::create([
			'is_link' => 1,
			'file' => 'https://i.imgur.com/FuNB4rV.png',
			'status' => 1
		]);

		Carousel::create([
			'is_link' => 1,
			'file' => 'https://i.imgur.com/YGaoKNI.gif',
			'status' => 1
		]);

		Carousel::create([
			'is_link' => 1,
			'file' => 'https://i.imgur.com/XvkAT5Q.gif',
			'status' => 1
		]);
	}
}