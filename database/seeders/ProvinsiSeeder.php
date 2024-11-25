<?php

namespace Database\Seeders;

use App\Models\Provinsi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('provinsis')->delete();
        DB::table('provinsis')->insert(array(
            0 =>
            array(
                'kode' => '11',
                'nama' => 'ACEH',
            ),
            1 =>
            array(
                'kode' => '12',
                'nama' => 'SUMATERA UTARA',
            ),
            2 =>
            array(
                'kode' => '13',
                'nama' => 'SUMATERA BARAT',
            ),
            3 =>
            array(
                'kode' => '14',
                'nama' => 'RIAU',
            ),
            4 =>
            array(
                'kode' => '15',
                'nama' => 'JAMBI',
            ),
            5 =>
            array(
                'kode' => '16',
                'nama' => 'SUMATERA SELATAN',
            ),
            6 =>
            array(
                'kode' => '17',
                'nama' => 'BENGKULU',
            ),
            7 =>
            array(
                'kode' => '18',
                'nama' => 'LAMPUNG',
            ),
            8 =>
            array(
                'kode' => '19',
                'nama' => 'KEPULAUAN BANGKA BELITUNG',
            ),
            9 =>
            array(
                'kode' => '21',
                'nama' => 'KEPULAUAN RIAU',
            ),
            10 =>
            array(
                'kode' => '31',
                'nama' => 'DKI JAKARTA',
            ),
            11 =>
            array(
                'kode' => '32',
                'nama' => 'JAWA BARAT',
            ),
            12 =>
            array(
                'kode' => '33',
                'nama' => 'JAWA TENGAH',
            ),
            13 =>
            array(
                'kode' => '34',
                'nama' => 'DAERAH ISTIMEWA YOGYAKARTA',
            ),
            14 =>
            array(
                'kode' => '35',
                'nama' => 'JAWA TIMUR',
            ),
            15 =>
            array(
                'kode' => '36',
                'nama' => 'BANTEN',
            ),
            16 =>
            array(
                'kode' => '51',
                'nama' => 'BALI',
            ),
            17 =>
            array(
                'kode' => '52',
                'nama' => 'NUSA TENGGARA BARAT',
            ),
            18 =>
            array(
                'kode' => '53',
                'nama' => 'NUSA TENGGARA TIMUR',
            ),
            19 =>
            array(
                'kode' => '61',
                'nama' => 'KALIMANTAN BARAT',
            ),
            20 =>
            array(
                'kode' => '62',
                'nama' => 'KALIMANTAN TENGAH',
            ),
            21 =>
            array(
                'kode' => '63',
                'nama' => 'KALIMANTAN SELATAN',
            ),
            22 =>
            array(
                'kode' => '64',
                'nama' => 'KALIMANTAN TIMUR',
            ),
            23 =>
            array(
                'kode' => '65',
                'nama' => 'KALIMANTAN UTARA',
            ),
            24 =>
            array(
                'kode' => '71',
                'nama' => 'SULAWESI UTARA',
            ),
            25 =>
            array(
                'kode' => '72',
                'nama' => 'SULAWESI TENGAH',
            ),
            26 =>
            array(
                'kode' => '73',
                'nama' => 'SULAWESI SELATAN',
            ),
            27 =>
            array(
                'kode' => '74',
                'nama' => 'SULAWESI TENGGARA',
            ),
            28 =>
            array(
                'kode' => '75',
                'nama' => 'GORONTALO',
            ),
            29 =>
            array(
                'kode' => '76',
                'nama' => 'SULAWESI BARAT',
            ),
            30 =>
            array(
                'kode' => '81',
                'nama' => 'MALUKU',
            ),
            31 =>
            array(
                'kode' => '82',
                'nama' => 'MALUKU UTARA',
            ),
            32 =>
            array(
                'kode' => '91',
                'nama' => 'PAPUA',
            ),
            33 =>
            array(
                'kode' => '92',
                'nama' => 'PAPUA BARAT',
            ),
        ));
    }
}
