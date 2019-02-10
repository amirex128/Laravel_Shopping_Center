<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('parent')->nullable();
            $table->string('title');
            $table->text('slug');
            $table->string('thumbnail')->nullable();
            $table->timestamps();
        });
        Schema::create('category_product', function (Blueprint $table) {
            $table->increments("id");
            $table->integer("category_id")->unsigned();

            $table->integer("product_id")->unsigned();

            $table->timestamps();
        });
        Schema::create('article_category', function (Blueprint $table) {
            $table->increments("id");
            $table->integer("article_id")->unsigned();

            $table->integer("category_id")->unsigned();

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
        Schema::dropIfExists('categories');
        Schema::dropIfExists('category_product');
        Schema::dropIfExists('article_category');
    }
}
