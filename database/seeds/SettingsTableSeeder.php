<?php

use Illuminate\Database\Seeder;

use App\Settings;

class SettingsTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		Settings::create([
			'name' => 'website_name',
			'value' => 'Defensive Measures Add-On Guide'
		]);

		Settings::create([
			'name' => 'website_desc',
			'value' => 'A Guide dedicated to Defensive Measures Add-on developed by Virus5600. Contains all details needed to know in DMA, ranging from installation, up to the updates released by the add-on.'
		]);

		Settings::create([
			'name' => 'branding',
			'value' => asset('images/UI/Cannon Turret.png')
		]);

		Settings::create([
			'name' => 'branding',
			'value' => asset('images/UI/Cannon Turret.png')
		]);
	}
}