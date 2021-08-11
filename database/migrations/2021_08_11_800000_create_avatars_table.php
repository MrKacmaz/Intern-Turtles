<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvatarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avatars', function (Blueprint $table) {
            $table->id();
            $table->string('npcName');
            $table->string('npcImagePath');
            $table->unsignedBigInteger('npcBase');
            $table->unsignedBigInteger('npcLevel');
            $table->foreign('npcBase')->references('id')->on('maps');
            $table->foreign('npcLevel')->references('id')->on('levels');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('avatars');
    }
}
