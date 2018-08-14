<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStreamsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('streams', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('number_of_students');
            $table->timestamps();
            $table->integer('sclass_id')->unsigned();

            // $table->foreign('sclass_id')->references('id')->on('sclasses');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('streams');
    }
}
