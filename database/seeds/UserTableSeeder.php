<?php

use Illuminate\Database\Seeder;

use App\User;

class UserTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		User::create([
			'first_name' => 'Karl Satchi',
			'last_name' => 'Navida',
			'username' => 'Virus5600',
			'email' => 'satchi5600@gmail.com',
			'password' => Hash::make('!Hypermarket5600&&hackerstophackingme')
		]);
	}
}