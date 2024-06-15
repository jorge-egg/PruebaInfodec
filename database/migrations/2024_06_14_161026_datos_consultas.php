<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DatosConsultas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datosConsultas', function (Blueprint $table){
            $table->bigIncrements('idConsulta');

            $table->unsignedBigInteger("idHistorial");

            $table->foreign("idHistorial")->references("idHistorial")->on("historiales")->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('datosConsultas');
    }
}
