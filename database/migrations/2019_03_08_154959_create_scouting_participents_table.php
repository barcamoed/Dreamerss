<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScoutingParticipentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scouting_participents', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('scouting_id');
            $table->unsignedInteger('artist_id');
            $table->foreign('scouting_id')->references('id')->on('scoutings');
            $table->foreign('artist_id')->references('id')->on('artists');

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
        Schema::dropIfExists('scouting_participents');
    }
}
