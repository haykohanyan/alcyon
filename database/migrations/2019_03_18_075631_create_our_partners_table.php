<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOurPartnersTable extends Migration
{

    public function up()
    {
        Schema::create('our_partners', function (Blueprint $table) {
            $table->increments('id');
            $table->text('link')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('our_partners');
    }
}
