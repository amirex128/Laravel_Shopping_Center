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
            $table->string("description")->nullable();
            $table->integer("price")->default(0);
            $table->integer("offer")->default(0);
            $table->string("thumbnail");
            $table->string("video")->nullable();
            $table->text("status");
            $table->integer("special")->default(1);
            $table->string("code");
            $table->integer("stock")->default(0);
            $table->integer("situation")->default(1);
            $table->integer("order_count")->default(0);
            $table->integer("view_count")->default(0);
            $table->integer("comment_count")->default(0);
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
