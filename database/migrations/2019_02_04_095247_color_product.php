<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ColorProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        Schema::table('color_product', function (Blueprint $table) {
//
//            $table->foreign("color_id")->references("id")->on("colors")->onDelete('cascade');
//
//            $table->foreign("product_id")->references("id")->on("products")->onDelete('cascade');
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
//        Schema::table('color_product', function (Blueprint $table) {
//            // 1. Drop foreign key constraints
//            $table->dropForeign(['color_id']);
//
//
//            // 1. Drop foreign key constraints
//            $table->dropForeign(['product_id']);
//
//        });
    }
}
