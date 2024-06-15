<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Ciudades extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ciudades')->insert([
            'nombre' => 'Londres',
            'idPais' => 1
        ]);DB::table('ciudades')->insert([
            'nombre' => 'Mánchester',
            'idPais' => 1
        ]);DB::table('ciudades')->insert([
            'nombre' => 'Tokio',
            'idPais' => 2
        ]);DB::table('ciudades')->insert([
            'nombre' => 'kioto',
            'idPais' => 2
        ]);DB::table('ciudades')->insert([
            'nombre' => 'Jaipur',
            'idPais' => 3
        ]);DB::table('ciudades')->insert([
            'nombre' => 'Bombay',
            'idPais' => 3
        ]);DB::table('ciudades')->insert([
            'nombre' => 'Copenhague',
            'idPais' => 4
        ]);DB::table('ciudades')->insert([
            'nombre' => 'Elsinor',
            'idPais' => 4
        ]);
    }
}
