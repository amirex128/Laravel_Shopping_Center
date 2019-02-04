<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
//            $table->integer("user_id");
//            $table->foreign("user_id")->references("id")->on("users");
            $table->string('admin_description');
            $table->string('user_description');
            $table->string('offer');
            $table->string('shopping_cost');
            $table->string('total_price');
            $table->string('status');
            $table->string('auth_code');
            $table->string('payment_code');
            $table->string('payment');
            $table->string('datetime');
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
        Schema::dropIfExists('orders');
    }
}
