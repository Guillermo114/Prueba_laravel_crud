<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Grupos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       
        Schema::create('grupos', function (Blueprint $table) {
            
            $table->engine="InnoDB"; //Borrar en cascada

            //TABLA
            $table->bigIncrements('id');
            $table->string('nombre_grupo');
            $table->integer('semestre');
            $table->string('turno');
            //FIN TABLA


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
        //
    }
}
