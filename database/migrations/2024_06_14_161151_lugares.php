<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Lugares extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lugares', function (Blueprint $table){
            $table->bigIncrements('idLugar');
            $table->string('imagen');
            $table->string('nombre', 50);
            $table->text('descripcion');

            $table->unsignedBigInteger("idCiudad");

            $table->foreign("idCiudad")->references("idCiudad")->on("ciudades")->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('lugares');
    }
}
