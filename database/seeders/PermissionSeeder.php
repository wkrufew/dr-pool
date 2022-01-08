<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create([
            'name' => 'Crear Servicios',
        ]);

        Permission::create([
            'name' => 'Leer Servicios',
        ]);

        Permission::create([
            'name' => 'Actualizar Servicios',
        ]);

        Permission::create([
            'name' => 'Eliminar Servicios',
        ]);

        Permission::create([
            'name' => 'Ver Dashboard',
        ]);

        Permission::create([
            'name' => 'Crear Rol',
        ]);

        Permission::create([
            'name' => 'Listar Rol',
        ]);

        Permission::create([
            'name' => 'Editar Rol',
        ]);

        Permission::create([
            'name' => 'Eliminar Rol',
        ]);

        Permission::create([
            'name' => 'Leer Usuario',
        ]);

        Permission::create([
            'name' => 'Editar Usuario',
        ]);

    }
}
