<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CuentaCobro extends Model
{
    protected $table    = 'cuenta_cobro';
    protected $fillable = ['descripcion', 'valor'];

    public function propietario(){

        return $this->belongsTo('App\Propietario', 'propietario_id');
    }
}
