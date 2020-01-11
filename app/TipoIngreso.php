<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoIngreso extends Model
{
    protected $table    = 'tipo_ingreso';
    protected $fillable = ['tipo'];

    public function ingresos(){
        
        return $this->hasMany('App\Ingreso', 'tipo_ingreso_id', 'id');
    }
}
