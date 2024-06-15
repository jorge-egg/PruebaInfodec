<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Paises extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paises', function (Blueprint $table){
            $table->bigIncrements('idPais');
            $table->string('nombre', 50);
            $table->string('moneda', 50);
            $table->string('simboloMoneda', 10);

            $table->unsignedBigInteger("idConsulta")->nullable();

            $table->foreign("idConsulta")->references("idConsulta")->on("datosConsultas")->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('paises');
    }
}
