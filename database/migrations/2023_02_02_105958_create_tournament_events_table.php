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
        Schema::create('tournament_events', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('team_id');
            $table->integer('tournament_id');
            $table->integer('match_time');
            $table->integer('period_time');
            $table->integer('period');
            $table->string('event');
            $table->string('score');
            $table->string('author_id');
            $table->string('assistant_id');
            $table->string('second_assistant_id');
            $table->string('context');
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
        Schema::dropIfExists('tournament_events');
    }
};
