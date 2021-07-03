<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique()->index();
            $table->foreignId('user_id')->constrained('users');
            $table->string('country');
            $table->string('company_name');
            $table->string('phone');
            $table->string('email');
            $table->string('type');
            $table->string('status')->default('pending');
            $table->string('address');
            $table->string('thumbnail')->default('images/default/supplier.png');
            $table->string('thumbnail2')->default('images/default/supplier.png');
            $table->string('thumbnail3')->default('images/default/supplier.png');
            $table->string('thumbnail4')->default('images/default/supplier.png');
            $table->string('thumbnail5')->default('images/default/supplier.png');
            $table->longText('description')->nullable();
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
        Schema::dropIfExists('suppliers');
    }
}
