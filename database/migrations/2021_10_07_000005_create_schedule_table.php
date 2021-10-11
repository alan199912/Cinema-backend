<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScheduleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('movie_id');
            $table->unsignedBigInteger('cinema_id');
            $table->timestamp('time');
            $table->timestamps();
            $table->foreign('movie_id')
                ->references('id')
                ->on('movies')
                ->onCascade('delete');
            $table->foreign('cinema_id')
                ->references('id')
                ->on('cinemas')
                ->onCascade('delete');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedules');
    }
}
