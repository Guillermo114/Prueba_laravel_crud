<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Estudiantes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {

            $table->engine = 'InnoDB'; //Borrado en cascada
    
            //TABLA
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('apellido_paterno');
            $table->string('apellido_materno');
            $table->integer('edad');
            $table->string('email')->unique();
            $table->string('teléfono')->unique();
    
            //Clave foránea para la relación con la tabla grupos
            $table->bigInteger('id_grupo')->unsigned();
            $table->foreign('id_grupo')->references('id')->on('grupos')->onDelete("cascade");
            
    
            $table->timestamps();
        });

           
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
