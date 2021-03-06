<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsisTrabajadorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asisTrabajador', function (Blueprint $table) {
            $table->increments('idasisTrabajador')->unique();
            $table->string('hora',9);
            $table->string('dia',10);
            //$table->timestamps('registro',6);
            $table->integer('idclase')->unsigned();
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
        Schema::dropIfExists('asisTrabajador');
    }
}
