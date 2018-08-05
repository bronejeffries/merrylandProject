<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    
    {
        Schema::create('subjects', function (Blueprint $table) {

            $table->increments('id');
            $table->string('code',20);
            $table->string('name',250);
            
            // $table->integer('subjectgroup_id',30)->unsigned();

            $table->boolean('is_core')->default(True);
            $table->integer('available_for_stdgroup_id')->unsigned();
            
            // $table->integer('teacher_id')->unsigned();


            $table->foreign('available_for_stdgroup_id')->references('id')->on('student_groups');
            
            //$table->foreign('teacher_id')->references('id')->on('teachers');

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
        Schema::dropIfExists('subjects');
    }
}
