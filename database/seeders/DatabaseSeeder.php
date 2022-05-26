<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PermissionsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(AnakTableSeeder::class);
        $this->call(PosyanduTableSeeder::class);
        $this->call(JadwalTableSeeder::class);
        $this->call(GiziTableSeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
