<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\typhoon;
class CreatUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('typhoons', function (Blueprint $table) {
            $table->integer('year');
            $table->integer('id')->primary();
            $table->char('name');
            $table->boolean('arrived');
            $table->integer('powerLV');
            $table->foreign('powerLV')->references('typower')->on('typhoon_year');
            $table->integer('level')->nullable();
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
        Schema::dropIfExists('typhoon');
    }
}
