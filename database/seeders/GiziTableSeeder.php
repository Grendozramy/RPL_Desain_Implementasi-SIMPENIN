<?php

namespace Database\Seeders;

use App\Models\Gizi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GiziTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gizi::create([
            'databalita_id'       => '1',
            'BBU'       => 'Gizi Baik',
            'TBU'            => 'Normal',
            'BBTB'            => 'Normal',
            'Z_BBU'            => '-0.17',
            'Z_TBU'            => '-0.98',
            'Z_BBTB'            => '0.44',
            'status_gizi'            => 'Gizi Normal',
            'z_score'            => '51.00',
            'validasi'            => 'sesuai',
        ]);
    }
}
