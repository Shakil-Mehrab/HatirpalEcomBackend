<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->string('slug')->unique()->index();
            $table->integer('country_id')->unsigned()->index();
            $table->integer('division_id')->unsigned()->index();
            $table->integer('district_id')->unsigned()->index();
            $table->integer('place_id')->unsigned()->index();
            $table->string('address');
            $table->string('postal_code');
            $table->boolean('default')->default(0);
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresses');
    }
}
