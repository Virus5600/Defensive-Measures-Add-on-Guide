<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVersionsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('versions', function (Blueprint $table) {
			$table->increments('id');
			$table->string('version');
			$table->enum('type', ['beta', 'release'])->default('beta');
			$table->mediumText('description')->nullable();
			$table->date('release_date')->nullable()->default(null);
			$table->string('win10_link');
			$table->string('mobile_link');
			$table->string('banner')->nullable()->default(null);
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('versions');
	}
}