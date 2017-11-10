<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumno', function (Blueprint $table) {
            $table->increments('idalumno')->unique();
            $table->string('nombres', 25);
            $table->string('apellidos',35);
            $table->integer('idgrupo')->unsigned();
            $table->integer('idusuario')->unsigned();
            $table->integer('idtrabajador')->unsigned();
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
        Schema::dropIfExists('alumno');
    }
}
