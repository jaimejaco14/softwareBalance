<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Egreso extends Model
{
    protected $table    = 'egreso';
    protected $fillable = ['descripcion', 'valor'];

    public function tipoEgreso(){

        return $this->belongsTo('App\TipoEgreso', 'tipo_egreso_id');
    }
}
