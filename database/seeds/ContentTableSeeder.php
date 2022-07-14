<?php

use Illuminate\Database\Seeder;

use App\Content;

class ContentTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Content::create([
			'item_id' => 1,
			'description' => '<p>Allows players to remove the turret without the need to destroy and re-craft the turrets all over again.</p>',
			'usage' => '
				<li>
					<h5 style="text-decoration: underline;">Turrets</h5>
					<p>Removes turrets without destroying the turrets.</p>
				</li>',
			'obtaining' => '
				<li>
					<h5 style="text-decoration: underline;">Crafting</h5>
					<p>As for now, the only way of obtaining this tool is through crafting.</p>
				</li>',
		]);
	}
}