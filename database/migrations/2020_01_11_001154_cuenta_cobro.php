<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CuentaCobro extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuenta_cobro', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion', 255);
            $table->integer('valor');
            $table->timestamps();
            $table->unsignedInteger('propietario_id');
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
        Schema::dropIfExists('cuenta_cobro');
    }
}
