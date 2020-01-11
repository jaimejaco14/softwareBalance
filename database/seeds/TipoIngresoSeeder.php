<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoIngresoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_ingreso')->insert([
            'tipo' => 'Caja menor'
        ]);
        DB::table('tipo_ingreso')->insert([
            'tipo' => 'Banco'
        ]);
    }
}
