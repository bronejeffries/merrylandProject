<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exams', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student_id')->unsigned();

            $table->integer('sclass_id')->unsigned();


            // $table->string('exam',50);

            $table->integer('subject_id')->unsigned();

            //assessments

            $table->integer('test')->default(0);
            $table->integer('mid')->default(0);
            $table->integer('final')->default(0);
            $table->integer('total')->default(0);
            $table->string('grade');

            //term details

            $table->string('term_id');
            $table->date('academic_year_id');


            // $table->decimal('point',3,2);
            // $table->string('Absent',10)->default('No');
            $table->timestamps();


            // $table->foreign('student_id')->references('id')->on('students');
            // $table->foreign('sclass_id')->references('id')->on('sclasses');
            // $table->foreign('term_id')->references('id')->on('terms');
            // $table->foreign('academic_year_id')->references('id')->on('academic_years');

            // $table->foreign('subject_id')->references('id')->on('subjects');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('marks');
    }
}
