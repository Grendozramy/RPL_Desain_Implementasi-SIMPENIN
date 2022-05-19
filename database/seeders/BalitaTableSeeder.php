<?php

namespace Database\Seeders;

use App\Models\Balita;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BalitaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Balita::create([
            'nama_balita' => 'Farhan Yamiza Kurniawan',
            'usia_balita' => '5',
            'status' => 'Bayi',
            'tinggi_badan' => '60',
            'berat_badan' => '5',
            'hasil_berat_badan' => 'Normal',
            'jenis_kelamin' => 'Laki-laki',
            'ideal' => 'Ya',
        ]);

        Balita::create([
            'nama_balita' => 'Yamiza Kurniawan Tamara',
            'usia_balita' => '120',
            'status' => 'Balita',
            'tinggi_badan' => '100',
            'berat_badan' => '20',
            'hasil_berat_badan' => 'Normal',
            'jenis_kelamin' => 'Perempuan',
            'ideal' => 'Ya',
        ]);
    }
}
