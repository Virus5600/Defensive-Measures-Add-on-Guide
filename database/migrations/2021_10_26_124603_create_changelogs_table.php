<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChangelogsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('changelogs', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('version_id')->unsigned();
			$table->enum('type', ['add', 'mod', 'rem'])->default('add');
			$table->string('changelog')->nullable()->default(null);
			$table->timestamps();

			$table->foreign('version_id')->references('id')->on('versions')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('changelogs');
	}
}