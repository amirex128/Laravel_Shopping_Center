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
            $table->integer('parent');
            $table->string('title');
            $table->string('thumbnail');
            $table->timestamps();
        });
        Schema::create('categories_products', function (Blueprint $table) {
//            $table->integer("category_id");
//            $table->foreign("category_id")->references("id")->on("categories");
//            $table->integer("product_id");
//            $table->foreign("product_id")->references("id")->on("products");
            $table->timestamps();
        });
        Schema::create('articles_categories', function (Blueprint $table) {
//            $table->integer("article_id");
//            $table->foreign("article_id")->references("id")->on("articles");
//            $table->integer("category_id");
//            $table->foreign("category_id")->references("id")->on("categories");
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
    }
}
