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
            $table->string('regiNo',20);

            $table->string('stdNo',20);
            $table->integer('sclass_id')->unsigned();

            $table->integer('level')->unsigned();
            $table->integer('mentor_id')->unsigned();
            $table->string('stream',10);
            $table->boolean('shift');

            $table->string('firstName',60);
            $table->string('middleName',60);
            $table->string('lastName',60);
            $table->string('gender',10);
            $table->string('religion',15);
            $table->string('nationality',50);
            $table->string('dob',12);
            $table->string('photo',30);
            $table->string('extraActivity',150)->nullable();
        // gurdian information
            $table->string('fatherName',180)->nullable();
            $table->string('fatherCellNo',15)->nullable();
            $table->string('motherName',180)->nullable();
            $table->string('motherCellNo',15)->nullable();
            $table->string('localGuardian',180)->nullable();
            $table->string('localGuardianCell',15)->nullable();
            $table->string('presentAddress',500);
            $table->string('parmanentAddress',500);

            //student status
            $table->boolean('isActive')->default(True);

            // //define foreign keys


            // $table->foreign('class_id')->references('id')->on('classes');
            // $table->foreign('level')->references('id')->on('student_groups');
            // $table->foreign('mentor_id')->references('id')->on('teachers');



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
