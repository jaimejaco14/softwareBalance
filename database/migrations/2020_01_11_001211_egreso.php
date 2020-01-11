<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Egreso extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('egreso', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion', 255);
            $table->integer('valor');
            $table->timestamps();
            $table->unsignedInteger('tipo_egreso_id');
            $table->foreign('tipo_egreso_id')->references('id')->on('tipo_egreso');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('egreso');
    }
}
