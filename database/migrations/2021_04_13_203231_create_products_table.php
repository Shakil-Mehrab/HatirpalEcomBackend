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
            $table->float('price');
            $table->string('thumbnail')->default('images/default/product.png');
            $table->longText('short_description')->nullable();
            $table->longText('description')->nullable();
            $table->string('status');
            $table->bigInteger('viewers')->default(0);
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
