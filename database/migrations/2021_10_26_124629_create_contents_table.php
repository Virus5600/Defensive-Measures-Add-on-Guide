<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contents', function (Blueprint $table) {
			$table->increments('id');
			$table->tinyInteger('item_id')->unsigned();
			$table->mediumText('description')->nullable()->default(null);
			$table->mediumText('usage')->nullable()->default(null);
			$table->mediumText('obtaining')->nullable()->default(null);
			$table->timestamps();

			$table->foreign('item_id')->references('id')->on('items')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('contents');
	}
}