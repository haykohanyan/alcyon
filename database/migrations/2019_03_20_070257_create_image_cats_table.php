<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImageCatsTable extends Migration
{

    public function up()
    {
        Schema::create('image_cats', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cat_id');
            $table->integer('image_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('image_cats');
    }
}
