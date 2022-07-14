<?php

use Illuminate\Database\Seeder;

use App\Version;

class VersionTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Version::create([
			'id' => 1,
			'version' => 'v1.0-beta',
			'type' => 'beta',
			'description' => '<p>This will officially be the debut of the Cannon Turret in the Add-On! Ready your powdered kegs as they\'ll sweep the area with their high-damage AoE Cannonballs! Cannon Turrets can be crafted and be placed almost everywhere, provided that there\'s a block to be placed on. Their slow rate of fire is compensated by their 2-shot kill damages, which can also damage surrounding entities.<p>',
			'release_date' => \Carbon\Carbon::parse("15-12-2020"),
			'win10_link' => 'https://cb.run/zs7f',
			'mobile_link' => 'https://cb.run/V1qk',
			'banner' => 'https://i.imgur.com/oBUJhfG.gif'
		]);

		Version::create([
			'id' => 2,
			'version' => 'v1.0.1-beta',
			'type' => 'beta',
			'description' => '
				<p>A new update has been released! A new turret, items and even block was implemented and will surely help defend your area!<p><br>
				<p>I present to you the Ballista! A medieval siege weapon that shoots large bolts of arrow towards enemy. The Ballista shoots much faster than the Cannon Turret, but has less health and deals less damage. The cheap crafting recipe of this turret allows you to create an early defense system for your world, in a sense, the durability of this turret is also lower than that of iron-clad Cannon Turret.</p>',
			'release_date' => \Carbon\Carbon::parse("18-12-2020"),
			'win10_link' => 'https://cb.run/Dogr',
			'mobile_link' => 'https://cb.run/QtSo',
			'banner' => 'https://i.imgur.com/YGaoKNI.gif'
		]);
	}
}