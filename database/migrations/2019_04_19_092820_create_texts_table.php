<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTextsTable extends Migration
{
    public function up()
    {
        Schema::create('texts', function (Blueprint $table) {
            $table->increments('id');
            $table->text('title_en')->nullable();
            $table->text('title_ru')->nullable();
            $table->text('title_am')->nullable();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('texts');
    }
}
