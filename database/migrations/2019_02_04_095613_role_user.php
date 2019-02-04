<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RoleUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('role_user', function (Blueprint $table) {

            $table->foreign("role_id")->references("id")->on("roles")->onDelete('cascade');

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
            Schema::table('role_user', function (Blueprint $table) {
                // 1. Drop foreign key constraints
                $table->dropForeign(['role_id']);


                // 1. Drop foreign key constraints
                $table->dropForeign(['user_id']);

            });
    }
}
