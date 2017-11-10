<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeriodoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('periodo', function (Blueprint $table) {
            $table->increments('idperiodo')->unique();
            $table->integer('tipo')->unsigned();
            $table->integer('ano')->unsigned();
            $table->timestamps();
            $table->softDeletes();
        });
    }
    /*
    string - varchar
    increments - autoincrement
    int - integer
    */


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('periodo');
    }
}
