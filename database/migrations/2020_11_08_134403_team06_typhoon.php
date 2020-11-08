<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Team06Typhoon extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team06_typhoon', function (Blueprint $table) {
            $table->integer("year");
            $table->id();
            $table->string('name');
            $table->boolean('arrived');
            $table->integer('powerLV');
            $table->integer('level');
            $table->foreign('powerLV')->references('id')->on('levels');
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
        Schema::dropIfExists('team06_typhoon');
    }
}
