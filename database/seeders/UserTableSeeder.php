<?php

namespace Database\Seeders;

use App\Models\Petugas;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
            'name'      => 'Farhan Gimang',
            'email'     => 'admin@gmail.com',
            'password'  => Hash::make('password'),
        ]);

        $user2 = User::create([
            'username'      => 'petugas',
            'name'      => 'Yamiza Anwar',
            'email'     => 'yamiza@gmail.com',
            'password'  => Hash::make('password'),
        ]);

        $user3 = User::create([
            'username'      => 'kurnialik',
            'name'      => 'Kurni',
            'email'     => 'kurni@gmail.com',
            'password'  => Hash::make('password'),
        ]);

        //assign role 
        $user1->assignRole('Admin');
        $user2->assignRole('Petugas');
        $user3->assignRole('Orangtua');

        //assign petugas
        $petugas1 = Petugas::create([
            'user_id' => $user1->id,
            'kode_petugas' => 'PTG'.Str::upper(Str::random(5)),
            'nama_petugas' => $user1->name,
            'jenis_kelamin' => 'Laki-laki',
        ]);

        $petugas2 = Petugas::create([
            'user_id' => $user2->id,
            'kode_petugas' => 'PTG'.Str::upper(Str::random(5)),
            'nama_petugas' => $user2->name,
            'jenis_kelamin' => 'Laki-laki',
        ]);
    }
}