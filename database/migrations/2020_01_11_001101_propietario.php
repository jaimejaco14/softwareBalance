<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Propietario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propietario', function (Blueprint $table) {
            $table->increments('id');
            $table->string('propietario', 50);
            $table->integer('numero_contacto')
                    ->nullable();
            $table->integer('apartamento')
                    ->unsigned();
            $table->unique('apartamento');
            $table->integer('valor_administracion');
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
        Schema::dropIfExists('propietario');
    }
}
