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
            $table->foreignId('user_id')->constrained('users');
            $table->string('slug')->unique()->index();
            $table->string('order_id')->unique();
            $table->foreignId('address_id')->constrained('addresses');
            $table->string('shipping_method');
            $table->string('payment_method')->nullable();
            $table->string('payment_id')->nullable();
            $table->string('payment_status')->default('pending');
            $table->string('status')->default('pending');
            $table->integer('subtotal');
            $table->integer('total');
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
