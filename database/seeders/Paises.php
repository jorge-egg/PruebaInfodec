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
            'moneda' => 'GBP',
            'simboloMoneda' => '£',
        ]);
        DB::table('paises')->insert([
            'nombre' => 'Japón',
            'moneda' => 'JPY',
            'simboloMoneda' => '¥',
        ]);
        DB::table('paises')->insert([
            'nombre' => 'India',
            'moneda' => 'INR',
            'simboloMoneda' => '₹',
        ]);
        DB::table('paises')->insert([
            'nombre' => 'Dinamarca',
            'moneda' => 'DKK',
            'simboloMoneda' => 'kr',
        ]);
    }
}
