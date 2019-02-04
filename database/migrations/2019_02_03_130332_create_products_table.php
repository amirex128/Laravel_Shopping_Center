<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
//            $table->integer("user_id");
//            $table->foreign("user_id")->references("id")->on("users");
//            $table->integer("brand_id");
//            $table->foreign("brand_id")->references("id")->on("brands");
//            $table->integer("gallery_id");
//            $table->foreign("gallery_id")->references("id")->on("galleries");
//            $table->integer("property_id");
//            $table->foreign("property_id")->references("id")->on("properties");
            $table->string("title");
            $table->text("body");
            $table->string("description");
            $table->string("price");
            $table->string("offer");
            $table->string("thumbnail");
            $table->string("video");
            $table->text("status");
            $table->string("special");
            $table->string("warranty");
            $table->string("code");
            $table->string("stock");
            $table->string("situation");
            $table->integer("order_count");
            $table->integer("view_count");
            $table->integer("comment_count");
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
        Schema::dropIfExists('products');
    }
}
