<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingreso extends Model
{
    protected $table    = 'ingreso';
    protected $fillable = ['descripcion', 'valor'];

    public function propietario(){

        return $this->belongsTo('App\Propietario', 'propietario_id');
    }

    public function tipoIngreso(){

        return $this->belongsTo('App\TipoIngreso', 'tipo_ingreso_id');
    }
}
