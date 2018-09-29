<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('regiNo');
            $table->integer('sclass_stream_id')->unsigned();
            $table->integer('level')->unsigned();
            $table->boolean('shift');
            $table->string('firstName',60);
            $table->string('middleName',60)->nullable();
            $table->string('lastName',60);
            $table->string('gender',10);
            $table->string('religion',15);
            $table->string('nationality',50);
            $table->string('dob',12);
            $table->string('photo');
            $table->string('extraActivity',150)->nullable();
            $table->string('village');
            $table->string('country');
            $table->string('county');
             $table->string('sub_county');
            $table->boolean('isActive')->default(1);

            // //define foreign keys

            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
