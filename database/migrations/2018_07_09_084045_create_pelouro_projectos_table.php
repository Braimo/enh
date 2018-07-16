<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePelouroProjectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelouro_projectos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pelouro_id')->unsigned()->index();
            $table->foreign('pelouro_id')->references('id')->on('pelouros')->onDelete('cascade');

            $table->integer('projecto_id')->unsigned()->index();
            $table->foreign('projecto_id')->references('id')->on('projectos')->onDelete('cascade');
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
        Schema::dropIfExists('pelouro_projectos');
    }
}
