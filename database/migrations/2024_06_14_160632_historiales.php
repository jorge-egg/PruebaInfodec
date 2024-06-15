<?php

use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Historiales extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historiales', function (Blueprint $table){
            $table->bigIncrements('idHistorial');
            $table->string('historialUno')->nullable();
            $table->date('fechaHistorialUno');
            $table->string('historialDos')->nullable();
            $table->date('fechaHistorialDos');
            $table->string('historialTres')->nullable();
            $table->date('fechaHistorialTres');
            $table->string('historialCuatro')->nullable();
            $table->date('fechaHistorialCuatro');
            $table->string('historialCinco')->nullable();
            $table->date('fechaHistorialCinco');
            $table->integer('contador')->default(0);

            $table->unsignedBigInteger("idUsuario");

            $table->foreign("idUsuario")->references("id")->on("usuarios")->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('historiales');
    }
}
