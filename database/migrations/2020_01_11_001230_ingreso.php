<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Ingreso extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingreso', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion', 255);
            $table->integer('valor');
            $table->timestamps();
            $table->unsignedInteger('tipo_ingreso_id');
            $table->unsignedInteger('propietario_id');
            $table->foreign('tipo_ingreso_id')->references('id')->on('tipo_ingreso');
            $table->foreign('propietario_id')->references('id')->on('propietario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ingreso');
    }
}
