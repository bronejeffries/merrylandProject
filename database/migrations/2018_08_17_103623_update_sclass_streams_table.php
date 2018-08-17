<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateSclassStreamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('sclass_streams', function (Blueprint $table) {
          $table->foreign('sclass_id')->references('id')->on('Sclasses');
          $table->foreign('stream_id')->references('id')->on('Streams');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('sclass_streams', function (Blueprint $table) {
          $table->dropColumn('sclass_id');
          $table->dropColumn('stream_id');
      });
    }
}
