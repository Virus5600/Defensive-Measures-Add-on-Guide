<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$this->call(UserTableSeeder::class);

		$this->call(CarouselTableSeeder::class);

		$this->call(VersionTableSeeder::class);
		$this->call(ChangelogTableSeeder::class);

		$this->call(ItemTableSeeder::class);
		$this->call(ContentTableSeeder::class);
		$this->call(CraftingRecipeTableSeeder::class);


	}
}