<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFicheirosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ficheiros', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_file_project')->nullable();
            $table->integer('id_file_area')->nullable();
            $table->integer('id_file_pelouro')->nullable();
            $table->integer('id_file_category')->nullable();
            $table->string('file_name');
            $table->string('file_size')->nullable();
            $table->string('file_path')->nullable();
            $table->string('file_category');
            $table->date('file_deadline');
            $table->string('file_format')->nullable();
            $table->string('file_description')->nullable();
            $table->string('file_comments');
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
        Schema::dropIfExists('ficheiros');
    }
}
