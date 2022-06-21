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
            'dataanak_id'       => '1',
            'BBU'       => 'Gizi Baik',
            'TBU'            => 'Normal',
            'BBTB'            => 'Normal',
            'Z_BBU'            => '-0.17',
            'Z_TBU'            => '-0.96',
            'Z_BBTB'            => '0.44',
        ]);

        Gizi::create([
            'dataanak_id'       => '2',
            'BBU'       => 'Gizi Kurang',
            'TBU'            => 'Normal',
            'BBTB'            => 'Normal',
            'Z_BBU'            => '-2.23',
            'Z_TBU'            => '-1.97',
            'Z_BBTB'            => '-1.45',
        ]);

        Gizi::create([
            'dataanak_id'       => '3',
            'BBU'       => 'Gizi Baik',
            'TBU'            => 'Normal',
            'BBTB'            => 'Normal',
            'Z_BBU'            => '-1.26',
            'Z_TBU'            => '-1.59',
            'Z_BBTB'            => '-0.32',
        ]);

        // Gizi::create([
        //     'dataanak_id'       => '4',
        //     'BBU'       => 'Gizi Baik',
        //     'TBU'            => 'Normal',
        //     'BBTB'            => 'Normal',
        //     'Z_BBU'            => '1.24',
        //     'Z_TBU'            => '0.17',
        //     'Z_BBTB'            => '1.65',
        // ]);
    }
}
