<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('claps', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('count');
            $table->unsignedInteger('post_id');
            $table->unsignedInteger('user_id');
            $table->foreign('post_id')->references('id')->on('posts');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('claps');
    }
}
