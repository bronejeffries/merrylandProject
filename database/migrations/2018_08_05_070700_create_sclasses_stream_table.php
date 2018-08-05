<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSclassesStreamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sclasses_stream', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('sclass_id')->unsigned();
            $table->integer('stream_id')->unsigned();

            $table->foreignkey('sclass_id')->references->('id')->on('sclasses')->onDelete('cascade');
            $table->foreignkey('stream_id')->references->('id')->on('streams')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sclasses_stream');
    }
}
