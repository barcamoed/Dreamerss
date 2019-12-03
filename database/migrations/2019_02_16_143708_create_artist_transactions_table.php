<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtistTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artist_transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('payment_id');
            $table->integer('amount');
            $table->string('type');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('artist_id');
            $table->foreign('artist_id')->references('id')->on('artists');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedInteger('competition_id');
            $table->foreign('competition_id')->references('id')->on('competitions');
            $table->unsignedInteger('scouting_id');
            $table->foreign('scouting_id')->references('id')->on('scoutings');
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
        Schema::dropIfExists('artist_transactions');
    }
}
