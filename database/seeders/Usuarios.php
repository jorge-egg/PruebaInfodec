<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Usuarios extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert([
            'nombre' => 'Jorge Eduardo',
            'apellido' => 'Garzon Galeano',
            'numeroDocumento' => '1193248110',
            'clave' => Hash::make('123456789'),
        ]);
    }
}
