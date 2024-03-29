<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePicturesTable extends Migration
{

    public function up()
    {
        Schema::create('pictures', function (Blueprint $table) {
            $table->increments('id');
            $table->string('picture')->nullable();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('pictures');
    }
}
