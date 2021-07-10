<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->integer('user_id')->unsigned()->index();
            $table->string('slug')->unique()->index();
            $table->string('order_id')->unique();
            $table->integer('address_id');
            $table->string('shipping_method');
            $table->string('payment_method')->index();
            $table->string('payment_id')->nullable();
            $table->string('payment_status')->default('pending');
            $table->string('status')->default('pending');
            $table->integer('subtotal');
            $table->integer('total');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('address_id')->references('id')->on('addresses');
            // $table->foreign('shipping_method_id')->references('id')->on('shipping_methods');
            // $table->foreign('payment_method_id')->references('id')->on('payment_methods');
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
