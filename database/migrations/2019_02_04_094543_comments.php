<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Comments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('comments', function (Blueprint $table) {

            $table->foreign("product_id")->references("id")->on("products")->onDelete('cascade');

            $table->foreign("user_id")->references("id")->on("users")->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comments', function (Blueprint $table) {

            // 1. Drop foreign key constraints
            $table->dropForeign(['product_id']);


            // 1. Drop foreign key constraints
            $table->dropForeign(['user_id']);

        });
    }
}
