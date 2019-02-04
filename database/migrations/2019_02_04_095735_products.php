<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->foreign("user_id")->references("id")->on("users");

            $table->foreign("brand_id")->references("id")->on("brands")->onDelete('cascade');

            $table->foreign("warranty_id")->references("id")->on("warranties")->onDelete('cascade');

            $table->foreign("gallery_id")->references("id")->on("galleries")->onDelete('cascade');

            $table->foreign("property_id")->references("id")->on("properties")->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
            Schema::table('products', function (Blueprint $table) {
                // 1. Drop foreign key constraints
                $table->dropForeign(['user_id']);


                // 1. Drop foreign key constraints
                $table->dropForeign(['brand_id']);


                // 1. Drop foreign key constraints
                $table->dropForeign(['gallery_id']);


                // 1. Drop foreign key constraints
                $table->dropForeign(['property_id']);

            });
    }
}
