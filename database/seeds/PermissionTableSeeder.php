<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'ver-rol',
            'crear-rol',
            'editar-rol',
            'eliminar-rol',
            'ver-usuario',
            'crear-usuario',
            'editar-usuario',
            'roles-usuario',
            'eliminar-usuario',
            'ver-post',
            'crear-post',
            'editar-post',
            'eliminar-post',
            'ver-campana',
            'crear-campana',
            'editar-campana',
            'eliminar-campana'
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
