<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserLevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_levels', function (Blueprint $table) {
            $table->id();
            $table->integer('userLevel');
            $table->integer('userExp');
            $table->integer('userMoney');
            $table->unsignedBigInteger('userLastMissionId');
            $table->unsignedBigInteger('userLastDialogId');
            $table->timestamp('lastSave');

            $table->foreign('userLastMissionId')->references('id')->on('missions');
            $table->foreign('userLastDialogId')->references('id')->on('dialogs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_levels');
    }
}
