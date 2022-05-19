<?php

namespace Database\Seeders;

use App\Models\Jadwal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JadwalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jadwal::create([
            'Imunisasi' => 'Hepatitis B',
            'bulan' => '0, 2, 4, dan 6',
        ]);

        Jadwal::create([
            'Imunisasi' => 'Polio',
            'bulan' => '1 - 4',
        ]);
    }
}
