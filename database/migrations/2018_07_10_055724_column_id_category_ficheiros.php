<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ColumnIdCategoryFicheiros extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ficheiros', function (Blueprint $table) {

            $table->integer('id_category')->nullable()->unsigned()->after('id_file_pelouro');
            $table->foreign('id_category')->references('id')->on('categorias');
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ficheiros', function (Blueprint $table) {


            //
        });
    }
}
