<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foods', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name',100);
            $table->integer('food_category_id')->unsigned();
            $table->integer('unit_price');
            $table->string('quantity_per_order');
            $table->string('image_path',200);
            $table->string('description',1000);
            $table->integer('status');
        });

        Schema::table('foods', function (Blueprint $table) {
            $table->foreign('food_category_id')->references('id')->on('food_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foods');
    }
}
