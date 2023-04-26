<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChallengesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('challenges', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('lev_id');
            $table->unsignedBigInteger('gam_id');
            $table->json('cha_val1')->nullable();
            $table->json('cha_val2')->nullable();
            $table->json('cha_val3')->nullable();
            $table->foreign('lev_id')->references('id')->on('levels')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('gam_id')->references('id')->on('games')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('challenges');
    }
}
