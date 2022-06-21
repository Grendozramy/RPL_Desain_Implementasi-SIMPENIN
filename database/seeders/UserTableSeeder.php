<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create data user 
        $user1 = User::create([
            'username'      => 'admin',
            'name'      => 'Admin',
            'email'     => 'admin@gmail.com',
            'password'  => Hash::make('password'),
        ]);

        $user2 = User::create([
            'username'      => 'petugas',
            'name'      => 'Yamiza Lorenzo',
            'email'     => 'yamiza@gmail.com',
            'password'  => Hash::make('password'),
        ]);

        $user3 = User::create([
            'username'      => 'orangtua',
            'name'      => 'Kurni',
            'email'     => 'kurni@gmail.com',
            'password'  => Hash::make('password'),
        ]);

        //assign role 
        $user1->assignRole('Admin');
        $user2->assignRole('Petugas');
        $user3->assignRole('Orangtua');

       
    }
}