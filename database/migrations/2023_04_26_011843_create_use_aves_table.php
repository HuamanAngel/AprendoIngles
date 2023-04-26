<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUseAvesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('use_aves', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ave_id');
            $table->unsignedBigInteger('us_id');
            $table->unsignedBigInteger('use_ave_level_complete')->default(0);
            $table->unsignedBigInteger('use_ave_challenge_complete')->default(0);
            $table->boolean('use_ave_complete')->default(false);
            $table->foreign('us_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('ave_id')->references('id')->on('aventures')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('use_aves');
    }
}
