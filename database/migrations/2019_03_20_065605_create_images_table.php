<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration
{

    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image')->nullable();
            $table->text('article1_am')->nullable();
            $table->text('article1_ru')->nullable();
            $table->text('article1_en')->nullable();
            $table->text('article2_am')->nullable();
            $table->text('article2_ru')->nullable();
            $table->text('article2_en')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('images');
    }
}
