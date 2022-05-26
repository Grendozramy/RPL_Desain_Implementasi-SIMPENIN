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
            'Imunisasi' => 'BCG',
            'bulan' => '0-3 Bulan (1x)',
        ]);
        Jadwal::create([
            'Imunisasi' => 'Hepatitis B',
            'bulan' => '0-1 Bulan',
        ]);

        Jadwal::create([
            'Imunisasi' => 'Polio',
            'bulan' => '0, 2, 4, 3, dan 18-24(1x) Bulan',
        ]);

        Jadwal::create([
            'Imunisasi' => 'DTP',
            'bulan' => '0, 2, 4, 3, dan 18-24(1x) Bulan',
        ]);

        Jadwal::create([
            'Imunisasi' => 'Campak',
            'bulan' => '9 Bulan, dan 5-7 Tahun(1x)',
        ]);

        Jadwal::create([
            'Imunisasi' => 'HIB',
            'bulan' => '2, 4, 6, 16-24(1x) dan 60 Bulan',
        ]);

        Jadwal::create([
            'Imunisasi' => 'PCV',
            'bulan' => '2, 4, 6, dan 12-15(1x) Bulan',
        ]);

        Jadwal::create([
            'Imunisasi' => 'Influenza',
            'bulan' => '6-216 Bulan (diberikan setiap tahun) ',
        ]);

        Jadwal::create([
            'Imunisasi' => 'Varisela',
            'bulan' => '12-216 Bulan(1x)',
        ]);

        Jadwal::create([
            'Imunisasi' => 'MMR',
            'bulan' => '15 Bulan dan 5-7 Tahun(1x)',
        ]);

        Jadwal::create([
            'Imunisasi' => 'Titoid',
            'bulan' => '24-216 Bulan(ulangan tiap 3 tahun)',
        ]);

        Jadwal::create([
            'Imunisasi' => 'Hepatitis A',
            'bulan' => '24-216 Bulan(2x, interval6-12 bulan)',
        ]);

        Jadwal::create([
            'Imunisasi' => 'HPV',
            'bulan' => '18 Tahun(3x)',
        ]);
        
    }
}
