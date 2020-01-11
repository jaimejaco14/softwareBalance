<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Propietario extends Model
{
    protected $table    = 'propietario';
    protected $fillable = ['propietario', 'numero_contacto', 'apartamento', 'valor_administracion'];

    public function cuentasCobro(){

        return $this->hasMany('App\CuentaCobro', 'propietario_id', 'id');
    }

    public function ingresos(){

        return $this->hasMany('App\Ingreso', 'propietario_id', 'id');
    }
}
