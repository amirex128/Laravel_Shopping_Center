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
            $table->integer("user_id")->unsigned();

            $table->integer("brand_id")->unsigned();

            $table->integer("warranty_id")->unsigned();

            $table->integer("gallery_id")->unsigned();

            $table->integer("property_id")->unsigned();

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
