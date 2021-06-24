<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->foreignId('user_id')->constrained('users');
            $table->string('name')->index();
            $table->string('slug')->unique()->index();
            $table->string('brand')->index();
            $table->boolean('top')->default(false);
            $table->float('order')->default(1);
            $table->float('old_price');
            $table->float('sale_price');
            $table->float('discount')->default(0);
            $table->string('unit');
            $table->string('thumbnail')->default('images/default/product.png');
            $table->longText('short_description')->nullable();
            $table->longText('description')->nullable();
            $table->string('status');
            $table->string('waranty')->nullable();
            $table->float('rating')->default(4.5);
            $table->float('vat')->default(0);
            $table->bigInteger('viewer')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
