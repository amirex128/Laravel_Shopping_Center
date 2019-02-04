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
            $table->integer("user_id")->unsigned();
            $table->text("admin_description");
            $table->text("user_description");
            $table->integer("offer");
            $table->integer("shopping_cost");
            $table->integer("total_price");
            $table->integer("status");
            $table->string("auth_code");
            $table->string("payment_code");
            $table->string("payment");
            $table->string("datetime");
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
