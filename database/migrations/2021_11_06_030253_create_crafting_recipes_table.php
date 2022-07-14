<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCraftingRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crafting_recipes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('for_item')->unsigned();
            $table->enum('recipe_type', ['3-by-3', '2-by-2', 'free-form', 'furnace'])->default('3-by-3');
            $table->string('shape')->default('0 0 0|0 0 0|0 0 0');
            $table->integer('amount')->default(1);
            $table->timestamps();

            $table->foreign('for_item')->references('id')->on('items')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('crafting_recipes', 'for_item');
    }
}
