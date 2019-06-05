<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWhatPeopleSaysTable extends Migration
{
    public function up()
    {
        Schema::create('what_people_says', function (Blueprint $table) {
            $table->increments('id');
            $table->text('title_am')->nullable();
            $table->text('title_ru')->nullable();
            $table->text('title_en')->nullable();
            $table->text('article_am')->nullable();
            $table->text('article_ru')->nullable();
            $table->text('article_en')->nullable();
            $table->string('from')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('what_people_says');
    }
}
