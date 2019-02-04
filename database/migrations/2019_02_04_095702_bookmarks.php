<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Bookmarks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bookmarks', function (Blueprint $table) {

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
            Schema::table('bookmarks', function (Blueprint $table) {
                // 1. Drop foreign key constraints
                $table->dropForeign(['user_id']);



            });
    }
}
