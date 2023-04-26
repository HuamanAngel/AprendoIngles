<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAveLevsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ave_levs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('lev_id');
            $table->unsignedBigInteger('use_id');
            $table->foreign('lev_id')->references('id')->on('levels')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('use_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('ave_levs');
    }
}
