<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('id_no');
            $table->string('gender');
            $table->string('date_of_birth');
            $table->string('religion');
            $table->string('photo');
            $table->string('others')->nullable();
            $table->string('village');
            $table->string('sub-county');
            $table->string('county');
            $table->string('country');
            $table->integer('role_id')->unsigned();
            $table->timestamps();

            // $table->foreign('role_id')->references('id')->on('roles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teachers');
    }
}
