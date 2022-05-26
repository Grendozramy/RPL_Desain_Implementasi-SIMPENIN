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
            // 'user_id' => $user1->id,
            'nama_petugas' => 'Farhan Gimang',
            'jabatan_petugas' => 'Ketua',
            'jenis_kelamin' => 'Laki-laki',
            'tempat_lahir' => 'Cimaja',
            'tanggal_lahir' => '2001-02-10',
            'alamat' => 'Rangkasbitung',
            'no_telp' => '087654321',
            'status' => 'Aktif',
            
        ]);

        $petugas2 = Petugas::create([
            // 'user_id' => $user2->id,
            'nama_petugas' => 'Yamiza Anwar',
            'jabatan_petugas' => 'Petugas',
            'jenis_kelamin' => 'Laki-laki',
            'tempat_lahir' => 'Bandung',
            'tanggal_lahir' => '1992-01-10',
            'alamat' => 'Purwakarta',
            'no_telp' => '0877098654',
            'status' => 'Aktif',
        ]);
    }
}