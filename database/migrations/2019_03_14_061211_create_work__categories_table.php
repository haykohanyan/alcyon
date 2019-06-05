<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('work_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id');
            $table->integer('work_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('work_categories');
    }
}