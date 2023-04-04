<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tournaments', function (Blueprint $table) {
            $table->id();
            $table->integer('kind_of_sport_id');
            $table->integer('division_id');
            $table->integer('team_id');
            $table->integer('rival_id');
            $table->integer('Location_of_the_tournament');
            $table->integer('statistic');
            $table->integer('first_referee');
            $table->integer('second_referee');
            $table->integer('third_referee');
            $table->date('start')->nullable();
            $table->date('end')->nullable();
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
        Schema::dropIfExists('tournaments');
    }
};
