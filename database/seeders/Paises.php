<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Paises extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('paises')->insert([
            'nombre' => 'Inglaterra',
            'moneda' => 'Libra esterlina',
            'simboloMoneda' => '£',
        ]);
        DB::table('paises')->insert([
            'nombre' => 'Japón',
            'moneda' => 'Yen',
            'simboloMoneda' => '¥',
        ]);
        DB::table('paises')->insert([
            'nombre' => 'India',
            'moneda' => 'Rupia',
            'simboloMoneda' => '₹',
        ]);
        DB::table('paises')->insert([
            'nombre' => 'Dinamarca',
            'moneda' => 'Corona danesa',
            'simboloMoneda' => 'kr',
        ]);
    }
}
