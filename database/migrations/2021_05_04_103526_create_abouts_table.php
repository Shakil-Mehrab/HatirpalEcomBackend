<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique()->index();
            $table->string('heading');
            $table->string('thumbnail')->default('images/default/about.png');
            $table->string('thumbnail1')->default('images/default/about.png');
            $table->string('thumbnail2')->default('images/default/about.png');
            $table->string('thumbnail3')->default('images/default/about.png');
            $table->string('thumbnail4')->default('images/default/about.png');
            $table->Text('short_description')->nullable();
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
        Schema::dropIfExists('abouts');
    }
}
