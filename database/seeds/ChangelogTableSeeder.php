<?php

use Illuminate\Database\Seeder;

use App\Changelog;

class ChangelogTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Changelog::create([
			'version_id' => 1,
			'type' => 'add',
			'changelog' => 'Added the cannonball projectile',
		]);

		Changelog::create([
			'version_id' => 1,
			'type' => 'add',
			'changelog' => 'Added render controller for cannonball',
		]);

		Changelog::create([
			'version_id' => 1,
			'type' => 'add',
			'changelog' => 'Added cannonball texture',
		]);

		Changelog::create([
			'version_id' => 1,
			'type' => 'add',
			'changelog' => 'Added cannonball RP and BP entity files',
		]);

		Changelog::create([
			'version_id' => 1,
			'type' => 'add',
			'changelog' => 'Added <code>cannon.hit</code> sounds for the cannon\'s sfx',
		]);

		Changelog::create([
			'version_id' => 1,
			'type' => 'mod',
			'changelog' => 'Updated documentation (.docx file) of the cannon to include the damage and if it is an AoE attack'
		]);

		Changelog::create([
			'version_id' => 1,
			'type' => 'mod',
			'changelog' => 'Updated cannon\'s BP entity file to remove unnecessary lines'
		]);

		Changelog::create([
			'version_id' => 1,
			'type' => 'mod',
			'changelog' => 'Updated Turret Remover\'s texture'
		]);

		Changelog::create([
			'version_id' => 1,
			'type' => 'mod',
			'changelog' => 'Updated Turret Remover\'s recipe'
		]);

		Changelog::create([
			'version_id' => 1,
			'type' => 'mod',
			'changelog' => 'Updated sounds file to include <code>hit1.ogg</code> and <code>hit2.ogg</code>'
		]);

		Changelog::create([
			'version_id' => 1,
			'type' => 'mod',
			'changelog' => 'Included cannon ball in the lang file'
		]);

		Changelog::create([
			'version_id' => 1,
			'type' => 'mod',
			'changelog' => 'Updated almost all hostile entities\' behavior, which allows them to be hostile towards the turrets'
		]);

		Changelog::create([
			'version_id' => 1,
			'type' => 'mod',
			'changelog' => 'Fixed animation bug where the turret\'s head yaw rotation is off'
		]);
		
		Changelog::create([
			'version_id' => 2,
			'type' => 'add',
			'changelog' => 'Added Ballista Arrow projectile for Ballista\'s projectile'
		]);
		
		Changelog::create([
			'version_id' => 2,
			'type' => 'add',
			'changelog' => 'Added "Ballista"'
		]);
		
		Changelog::create([
			'version_id' => 2,
			'type' => 'add',
			'changelog' => 'Added "Ballista Arrow Head" block'
		]);
		
		Changelog::create([
			'version_id' => 2,
			'type' => 'add',
			'changelog' => 'Added Ballista Arrow\'s animation'
		]);
		
		Changelog::create([
			'version_id' => 2,
			'type' => 'add',
			'changelog' => 'Added "Ballista Base" crafting recipe'
		]);
		
		Changelog::create([
			'version_id' => 2,
			'type' => 'add',
			'changelog' => 'Added "Ballista Base with Stand" crafting recipe'
		]);
		
		Changelog::create([
			'version_id' => 2,
			'type' => 'add',
			'changelog' => 'Added "Ballista Bow" crafting recipe'
		]);
		
		Changelog::create([
			'version_id' => 2,
			'type' => 'add',
			'changelog' => 'Added "Ballista Arrow Head" crafting recipe'
		]);
		
		Changelog::create([
			'version_id' => 2,
			'type' => 'add',
			'changelog' => 'Added "Ballista Arrow" crafting recipe'
		]);
		
		Changelog::create([
			'version_id' => 2,
			'type' => 'add',
			'changelog' => 'Added "Ballista" crafting recipe'
		]);
		
		Changelog::create([
			'version_id' => 2,
			'type' => 'mod',
			'changelog' => 'Reverts the custom projectile (Ballista Arrow) to its old projectile (Arrow)'
		]);
	}
}