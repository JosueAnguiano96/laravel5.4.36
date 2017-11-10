<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clase', function (Blueprint $table) {
            $table->increments('idclase')->unique();
            $table->string('hora',9);
            $table->string('dia',10);
            $table->integer('idalumno')->unsigned();
            $table->integer('idgrupo')->unsigned();
            $table->integer('idtrabajador')->unsigned();
            $table->integer('idperiodo')->unsigned();
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
        Schema::dropIfExists('clase');
    }
}
