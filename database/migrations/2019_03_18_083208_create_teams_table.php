<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamsTable extends Migration
{

    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name_en')->nullable();
            $table->text('name_ru')->nullable();
            $table->text('name_am')->nullable();
            $table->text('position_en')->nullable();
            $table->text('position_ru')->nullable();
            $table->text('position_am')->nullable();
            $table->string('image');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('teams');
    }
}
