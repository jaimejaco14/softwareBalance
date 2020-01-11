<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoEgresoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_egreso')->insert([
            'tipo' => 'Papelería y correspondencia'
        ]);
        DB::table('tipo_egreso')->insert([
            'tipo' => 'Energía'
        ]);
        DB::table('tipo_egreso')->insert([
            'tipo' => 'Mantenimiento'
        ]);
        DB::table('tipo_egreso')->insert([
            'tipo' => 'Acueducto'
        ]);
        DB::table('tipo_egreso')->insert([
            'tipo' => 'Revisión fiscal'
        ]);
        DB::table('tipo_egreso')->insert([
            'tipo' => 'Aseo'
        ]);
        DB::table('tipo_egreso')->insert([
            'tipo' => 'Seguro'
        ]);
        DB::table('tipo_egreso')->insert([
            'tipo' => 'Transporte'
        ]);
        DB::table('tipo_egreso')->insert([
            'tipo' => 'Otro'
        ]);
    }
}
