<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class  PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //permission for balita
        Permission::create(['name' => 'balita.index']);
        Permission::create(['name' => 'balita.create']);
        Permission::create(['name' => 'balita.edit']);
        Permission::create(['name' => 'balita.show']);
        Permission::create(['name' => 'balita.delete']);

        //permission for petugas
        Permission::create(['name' => 'petugas.index']);
        Permission::create(['name' => 'petugas.create']);
        Permission::create(['name' => 'petugas.edit']);
        Permission::create(['name' => 'petugas.delete']);

        //permission for posyandu
        Permission::create(['name' => 'posyandu.index']);
        Permission::create(['name' => 'posyandu.create']);
        Permission::create(['name' => 'posyandu.edit']);
        Permission::create(['name' => 'posyandu.delete']);

        //permission for jadwal
        Permission::create(['name' => 'jadwal.index']);
        Permission::create(['name' => 'jadwal.create']);
        Permission::create(['name' => 'jadwal.edit']);
        Permission::create(['name' => 'jadwal.delete']);

        //permission for gizi
        Permission::create(['name' => 'gizi.index']);
        Permission::create(['name' => 'gizi.create']);
        Permission::create(['name' => 'gizi.edit']);
        Permission::create(['name' => 'gizi.delete']);
        Permission::create(['name' => 'gizi.show']);

        //permission for roles
        Permission::create(['name' => 'roles.index']);
        Permission::create(['name' => 'roles.create']);
        Permission::create(['name' => 'roles.edit']);
        Permission::create(['name' => 'roles.delete']);

        //permission for permissions
        Permission::create(['name' => 'permissions.index']);

        //permission for users
        Permission::create(['name' => 'users.index']);
        Permission::create(['name' => 'users.create']);
        Permission::create(['name' => 'users.edit']);
        Permission::create(['name' => 'users.delete']);
    }
}