<?php

namespace Database\Seeders;

use App\Models\Petugas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PetugasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //assign petugas
          Petugas::create([
            // 'user_id' => $user1->id,
            'nama_petugas' => 'Farhan Fhalosa',
            'jabatan_petugas' => 'Ketua',
            'jenis_kelamin' => 'Laki-laki',
            'tempat_lahir' => 'Cimaja',
            'tanggal_lahir' => '2001-02-10',
            'alamat' => 'Rangkasbitung',
            'no_telp' => '087654321',
            'status' => 'Aktif',
            
        ]);

        Petugas::create([
            // 'user_id' => $user2->id,
            'nama_petugas' => 'Yamiza Anwarul',
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
