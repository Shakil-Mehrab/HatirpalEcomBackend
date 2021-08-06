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
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('country');
            $table->string('company_name');
            $table->string('phone');
            $table->string('email');
            $table->string('company_type');
            $table->string('status')->default('pending');
            $table->string('address');
            $table->string('thumbnail')->nullable();
            $table->string('thumbnail1')->nullable();
            $table->string('thumbnail2')->nullable();
            $table->string('thumbnail3')->nullable();
            $table->string('thumbnail4')->nullable();
            $table->longText('description')->nullable();
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
        Schema::dropIfExists('suppliers');
    }
}