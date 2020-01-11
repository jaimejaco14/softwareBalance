<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoEgreso extends Model
{
    protected $table    = 'tipo_egreso';
    protected $fillable = ['tipo'];

    public function egresos(){
        
        return $this->hasMany('App\Egreso', 'tipo_egreso_id', 'id');
    }
}
