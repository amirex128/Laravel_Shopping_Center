<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ArticleGategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('article_category', function (Blueprint $table) {
            $table->foreign("article_id")->references("id")->on("articles")->onDelete('cascade');

            $table->foreign("category_id")->references("id")->on("categories")->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
            Schema::table('article_category', function (Blueprint $table) {
                // 1. Drop foreign key constraints
                $table->dropForeign(['article_id']);


                // 1. Drop foreign key constraints
                $table->dropForeign(['category_id']);


            });
    }
}
