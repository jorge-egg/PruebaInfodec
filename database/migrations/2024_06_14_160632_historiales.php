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
            $table->string('historialDos')->nullable();
            $table->string('historialTres')->nullable();
            $table->string('historialCuatro')->nullable();
            $table->string('historialCinco')->nullable();
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
