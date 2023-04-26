<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('av_id')->nullable();
            $table->string('us_name');
            $table->string('us_lastname');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->unsignedBigInteger('us_coins')->default(0);
            $table->unsignedBigInteger('us_aventures_complete')->default(0);
            $table->unsignedBigInteger('us_levels_complete')->default(0);
            $table->unsignedBigInteger('us_challenges_complete')->default(0);
            $table->unsignedBigInteger('us_hours_in_game')->default(0);

            $table->foreign('av_id')->references('id')->on('avatars')->onDelete('cascade')->onUpdate('cascade');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
