<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWcuSkillsTable extends Migration
{
    public function up()
    {
        Schema::create('wcu_skills', function (Blueprint $table) {
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
        Schema::dropIfExists('wcu_skills');
    }
}
