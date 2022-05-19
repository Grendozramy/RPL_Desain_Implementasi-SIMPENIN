<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create([
            'name' => 'Admin'
        ]);

        $role1->syncPermissions([
            'balita.index', 'balita.create', 'balita.edit', 'balita.delete', 'balita.show',
            'petugas.index', 'petugas.create', 'petugas.edit', 'petugas.delete',
            'posyandu.index', 'posyandu.create', 'posyandu.edit', 'posyandu.delete',
            'jadwal.index', 'jadwal.create', 'jadwal.edit', 'jadwal.delete',
            'gizi.index', 'gizi.create', 'gizi.edit', 'gizi.delete', 'gizi.show',
            'roles.index', 'roles.create', 'roles.edit', 'roles.delete',
            'permissions.index',
            'users.index', 'users.create', 'users.edit', 'users.delete',
        ]);

        $role2 = Role::create([
            'name' => 'Petugas'
        ]);

        $role2->syncPermissions([
            'balita.index', 'balita.create', 'balita.edit', 'balita.delete', 'balita.show',
            'petugas.index',
            'posyandu.index', 'posyandu.create', 'posyandu.edit', 'posyandu.delete',
            'jadwal.index', 'jadwal.create', 'jadwal.edit', 'jadwal.delete',
            'gizi.index', 'gizi.create', 'gizi.edit', 'gizi.delete', 'gizi.show',
            'users.index','users.edit',
        ]);

        $role3 = Role::create([
            'name' => 'Orangtua'
        ]);

        $role3->syncPermissions([
            'balita.index', 'balita.show',
            'posyandu.index',
            'jadwal.index',
            'gizi.index',
            'gizi.show',
            'users.edit'    
        ]);
    }
}