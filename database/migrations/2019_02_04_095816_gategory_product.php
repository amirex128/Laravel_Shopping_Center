<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GategoryProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('category_product', function (Blueprint $table) {
            $table->foreign("category_id")->references("id")->on("categories")->onDelete('cascade');

            $table->foreign("product_id")->references("id")->on("products")->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
            Schema::table('category_product', function (Blueprint $table) {
                // 1. Drop foreign key constraints
                $table->dropForeign(['category_id']);


                // 1. Drop foreign key constraints
                $table->dropForeign(['product_id']);

            });
    }
}
