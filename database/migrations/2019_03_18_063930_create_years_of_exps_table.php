<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateYearsOfExpsTable extends Migration
{
    public function up()
    {
        Schema::create('years_of_exps', function (Blueprint $table) {
            $table->increments('id');
            $table->text('title_am')->nullable();
            $table->text('title_ru')->nullable();
            $table->text('title_en')->nullable();
            $table->integer('count')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('years_of_exps');
    }
}
