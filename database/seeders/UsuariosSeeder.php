<?php

namespace Database\Seeders;

use App\Models\Usuarios;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Usuarios as ModelsUsuarios;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModelsUsuarios::create([
            'nombre' => 'Jorge Eduardo',
            'apellido' => 'Garzon Galeano',
            'numeroDocumento' => '1193248110',
            'clave' => Hash::make('123456789'),
        ])->assignRole('administrador');
    }
}
