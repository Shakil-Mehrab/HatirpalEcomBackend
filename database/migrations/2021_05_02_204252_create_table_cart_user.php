<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCartUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->default(1)->constrained('users');
            $table->foreignId('product_id')->default(1)->constrained('products');
            $table->integer('quantity')->unsigned()->default(1);
            $table->string('product_image');
            $table->foreignId('size_id')->constrained('sizes');
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
        Schema::dropIfExists('cart_user');
    }
}
