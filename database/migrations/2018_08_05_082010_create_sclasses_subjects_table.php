<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSclassesSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sclasses_subjects', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('sclass_id')->unsigned();
          $table->integer('subject_id')->unsigned();
          $table->timestamps();

        //   $table->foreign('sclass_id')->references('id')->on('sclasses');
        //   $table->foreign('subject_id')->references('id')->on('subjects');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sclasses_subjects');
    }
}
