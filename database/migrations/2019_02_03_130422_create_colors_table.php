<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('code');
            $table->timestamps();
        });

        Schema::create('color_product', function (Blueprint $table) {
            $table->increments("id");
//            $table->integer("color_id");
            $table->timestamps();
//            $table->foreign("color_id")->references("id")->on("colors");
            $table->integer("product_id");
//            $table->foreign("product_id")->references("id")->on("products");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('colors');
        Schema::dropIfExists('color_product');
    }
}
