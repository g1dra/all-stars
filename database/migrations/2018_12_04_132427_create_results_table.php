<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->increments('id');
            $table->string('league');
            $table->string('round');
            $table->string('location');

            $table->string('home');
            $table->unsignedInteger('home_points');
            $table->string('home_quarter_points');
            $table->unsignedInteger('home_assists');
            $table->unsignedInteger('home_rebounds');
            $table->unsignedInteger('home_steals');

            $table->string('guest');
            $table->unsignedInteger('guest_points');
            $table->string('guest_quarter_points');
            $table->unsignedInteger('guest_assists');
            $table->unsignedInteger('guest_rebounds');
            $table->unsignedInteger('guest_steals');

            $table->date('date');
            $table->time('time');
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
        Schema::dropIfExists('results');
    }
}
