<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SaldoAnterior extends Model
{
    protected $table    = 'saldo_anterior';
    protected $fillable = ['saldo'];
}
