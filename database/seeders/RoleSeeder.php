<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rol1 = Role::create(['name' => 'administrador']);
        $rol2 = Role::create(['name' => 'usuario']);

        Permission::create(['name' => 'consultar'])->syncRoles($rol1, $rol2);
        Permission::create(['name' => 'pantallaUno'])->syncRoles($rol1, $rol2);
        Permission::create(['name' => 'pantallaDos'])->syncRoles($rol1, $rol2);
        Permission::create(['name' => 'pantallaTres'])->syncRoles($rol1, $rol2);
    }
}
