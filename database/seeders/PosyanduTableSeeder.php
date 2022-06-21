<?php

namespace Database\Seeders;

use App\Models\Posyandu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PosyanduTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Posyandu::create([
            'jadwal' => '2022-05-10',
            'nama_posyandu' => 'Posyandu Sari Kasih',
            'tempat' => 'Desa Bojong, Purwakarta',
            'petugas_id' => '1',
        ]);
        
        Posyandu::create([
            'jadwal' => '2022-04-08',
            'nama_posyandu' => 'Mulya Inda',
            'tempat' => 'Desa Banjarsari, Rangkasbitung',
            'petugas_id' => '2',
        ]);
    }
}
