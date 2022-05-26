<?php

namespace Database\Seeders;

use App\Models\Anak;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnakTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Anak::create([
            'nama_anak' => 'Firyal',
            'nik_anak' => '378932298387900',
            'tempat_lahir' => 'Purwakarta',
            'tgl_lahir' => '2021-02-10',
            'status' => 'Bayi',
            'tinggi_badan' => '60',
            'berat_badan' => '5',
            'jenis_kelamin' => 'Laki-laki',
        ]);

        Anak::create([
            'nama_anak' => 'Farhan',
            'nik_anak' => '3782118902922901',
            'tempat_lahir' => 'Rangkasbitung',
            'tgl_lahir' => '2021-03-01',
            'status' => 'Balita',
            'tinggi_badan' => '100',
            'berat_badan' => '20',
            'jenis_kelamin' => 'Perempuan',
        ]);

        Anak::create([
            'nama_anak' => 'Mansel',
            'nik_anak' => '379539930209993',
            'tempat_lahir' => 'Solo',
            'tgl_lahir' => '2021-02-20',
            'status' => 'Balita',
            'tinggi_badan' => '90',
            'berat_badan' => '6',
            'jenis_kelamin' => 'Laki-laki',
        ]);

        Anak::create([
            'nama_anak' => 'Kurniawan',
            'nik_anak' => '3788433829229019',
            'tempat_lahir' => 'Bandung',
            'tgl_lahir' => '2021-02-10',
            'status' => 'Bayi',
            'tinggi_badan' => '75',
            'berat_badan' => '3',
            'jenis_kelamin' => 'Laki-laki',
        ]);
    }
}
