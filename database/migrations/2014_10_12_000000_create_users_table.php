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
            $table->string('name');
            $table->string('surname');
            $table->string('nickName');
            $table->string('email')->unique();

            $table->integer('userLevel');
            $table->integer('userAvatar');

            // userLevel (bu tablonun sütunu), id (diğer tablonun PK), user_levels(Diğer tablonun adı)
            $table->foreign('userLevel')->references('id')->on('user_levels');
            $table->foreign('userAvatar')->references('id')->on('avatars');


            $table->date('signInDate');
            $table->rememberToken();
            $table->ipAddress('visitor');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password'); 
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
