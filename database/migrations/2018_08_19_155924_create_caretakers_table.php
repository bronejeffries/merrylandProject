<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaretakersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caretakers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student_id');
            $table->string('name');
            $table->string('type');
            $table->string('email');
            $table->string('photo');
            $table->string('contact');
            $table->string('permanent_address');
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
        Schema::dropIfExists('caretakers');
    }
}
