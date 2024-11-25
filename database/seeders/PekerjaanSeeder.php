<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PekerjaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pekerjaans')->delete();
        
        DB::table('pekerjaans')->insert(array(
            0 =>
            array(
                'kode' => 'PK01',
                'nama' => 'BELUM/TIDAK BEKERJA',
            ),
            1 =>
            array(
                'kode' => 'PK02',
                'nama' => 'MENGURUS RUMAH TANGGA',
            ),
            2 =>
            array(
                'kode' => 'PK03',
                'nama' => 'PELAJAR/MAHASISWA',

            ),
            3 =>
            array(
                'kode' => 'PK04',
                'nama' => 'PENSIUNAN',

            ),
            4 =>
            array(
                'kode' => 'PK05',
                'nama' => 'PEGAWAI NEGERI SIPIL',

            ),
            5 =>
            array(
                'kode' => 'PK06',
                'nama' => 'TENTARA NASIONAL INDONESIA',

            ),
            6 =>
            array(
                'kode' => 'PK07',
                'nama' => 'KEPOLISIAN RI',

            ),
            7 =>
            array(
                'kode' => 'PK08',
                'nama' => 'PERDAGANGAN',

            ),
            8 =>
            array(
                'kode' => 'PK09',
                'nama' => 'PETANI/PEKEBUN',

            ),
            9 =>
            array(
                'kode' => 'PK10',
                'nama' => 'PETERNAK',

            ),
            10 =>
            array(
                'kode' => 'PK11',
                'nama' => 'NELAYAN/PERIKANAN',

            ),
            11 =>
            array(
                'kode' => 'PK12',
                'nama' => 'INDUSTRI',

            ),
            12 =>
            array(
                'kode' => 'PK13',
                'nama' => 'KONSTRUKSI',

            ),
            13 =>
            array(
                'kode' => 'PK14',
                'nama' => 'TRANSPORTASI',

            ),
            14 =>
            array(
                'kode' => 'PK15',
                'nama' => 'KARYAWAN SWASTA',

            ),
            15 =>
            array(
                'kode' => 'PK16',
                'nama' => 'KARYAWAN BUMN',

            ),
            16 =>
            array(
                'kode' => 'PK17',
                'nama' => 'KARYAWAN BUMD',

            ),
            17 =>
            array(
                'kode' => 'PK18',
                'nama' => 'KARYAWAN HONORER',

            ),
            18 =>
            array(
                'kode' => 'PK19',
                'nama' => 'BURUH HARIAN LEPAS',

            ),
            19 =>
            array(
                'kode' => 'PK20',
                'nama' => 'BURUH TANI/PERKEBUNAN',

            ),
            20 =>
            array(
                'kode' => 'PK21',
                'nama' => 'BURUH NELAYAN/PERIKANAN',

            ),
            21 =>
            array(
                'kode' => 'PK22',
                'nama' => 'BURUH PETERNAKAN',

            ),
            22 =>
            array(
                'kode' => 'PK23',
                'nama' => 'PEMBANTU RUMAH TANGGA',

            ),
            23 =>
            array(
                'kode' => 'PK24',
                'nama' => 'TUKANG CUKUR',

            ),
            24 =>
            array(
                'kode' => 'PK25',
                'nama' => 'TUKANG LISTRIK',

            ),
            25 =>
            array(
                'kode' => 'PK26',
                'nama' => 'TUKANG BATU',

            ),
            26 =>
            array(
                'kode' => 'PK27',
                'nama' => 'TUKANG KAYU',

            ),
            27 =>
            array(
                'kode' => 'PK28',
                'nama' => 'TUKANG SOL SEPATU',

            ),
            28 =>
            array(
                'kode' => 'PK29',
                'nama' => 'TUKANG LAS/PANDAI BESI',

            ),
            29 =>
            array(
                'kode' => 'PK30',
                'nama' => 'TUKANG JAHIT',

            ),
            30 =>
            array(
                'kode' => 'PK31',
                'nama' => 'TUKANG GIGI',

            ),
            31 =>
            array(
                'kode' => 'PK32',
                'nama' => 'PENATA RIAS',

            ),
            32 =>
            array(
                'kode' => 'PK33',
                'nama' => 'PENATA BUSANA',

            ),
            33 =>
            array(
                'kode' => 'PK34',
                'nama' => 'PENATA RAMBUT',

            ),
            34 =>
            array(
                'kode' => 'PK35',
                'nama' => 'MEKANIK',

            ),
            35 =>
            array(
                'kode' => 'PK36',
                'nama' => 'SENIMAN',

            ),
            36 =>
            array(
                'kode' => 'PK37',
                'nama' => 'TABIB',

            ),
            37 =>
            array(
                'kode' => 'PK38',
                'nama' => 'PARAJI',

            ),
            38 =>
            array(
                'kode' => 'PK39',
                'nama' => 'PERANCANG BUSANA',

            ),
            39 =>
            array(
                'kode' => 'PK40',
                'nama' => 'PENTERJEMAH',

            ),
            40 =>
            array(
                'kode' => 'PK41',
                'nama' => 'IMAM MESJID',

            ),
            41 =>
            array(
                'kode' => 'PK42',
                'nama' => 'PENDETA',

            ),
            42 =>
            array(
                'kode' => 'PK43',
                'nama' => 'PASTOR',

            ),
            43 =>
            array(
                'kode' => 'PK44',
                'nama' => 'WARTAWAN',

            ),
            44 =>
            array(
                'kode' => 'PK45',
                'nama' => 'USTADZ/MUBALIGH',

            ),
            45 =>
            array(
                'kode' => 'PK46',
                'nama' => 'JURU MASAK',

            ),
            46 =>
            array(
                'kode' => 'PK47',
                'nama' => 'PROMOTOR ACARA',

            ),
            47 =>
            array(
                'kode' => 'PK48',
                'nama' => 'ANGGOTA DPR-RI',

            ),
            48 =>
            array(
                'kode' => 'PK49',
                'nama' => 'ANGGOTA DPD',

            ),
            49 =>
            array(
                'kode' => 'PK50',
                'nama' => 'ANGGOTA BPK',

            ),
            50 =>
            array(
                'kode' => 'PK51',
                'nama' => 'PRESIDEN',

            ),
            51 =>
            array(
                'kode' => 'PK52',
                'nama' => 'WAKIL PRESIDEN',

            ),
            52 =>
            array(
                'kode' => 'PK53',
                'nama' => 'ANGGOTA MAHKAMAH KONSTITUSI',

            ),
            53 =>
            array(
                'kode' => 'PK54',
                'nama' => 'ANGGOTA KABINET/KEMENTERIAN',

            ),
            54 =>
            array(
                'kode' => 'PK55',
                'nama' => 'DUTA BESAR',

            ),
            55 =>
            array(
                'kode' => 'PK56',
                'nama' => 'GUBERNUR',

            ),
            56 =>
            array(
                'kode' => 'PK57',
                'nama' => 'WAKIL GUBERNUR',

            ),
            57 =>
            array(
                'kode' => 'PK58',
                'nama' => 'BUPATI',

            ),
            58 =>
            array(
                'kode' => 'PK59',
                'nama' => 'WAKIL BUPATI',

            ),
            59 =>
            array(
                'kode' => 'PK60',
                'nama' => 'WALIKOTA',

            ),
            60 =>
            array(
                'kode' => 'PK61',
                'nama' => 'WAKIL WALIKOTA',

            ),
            61 =>
            array(
                'kode' => 'PK62',
                'nama' => 'ANGGOTA DPRD PROVINSI',

            ),
            62 =>
            array(
                'kode' => 'PK63',
                'nama' => 'ANGGOTA DPRD KABUPATEN/KOTA',

            ),
            63 =>
            array(
                'kode' => 'PK64',
                'nama' => 'DOSEN',

            ),
            64 =>
            array(
                'kode' => 'PK65',
                'nama' => 'GURU',

            ),
            65 =>
            array(
                'kode' => 'PK66',
                'nama' => 'PILOT',

            ),
            66 =>
            array(
                'kode' => 'PK67',
                'nama' => 'PENGACARA',

            ),
            67 =>
            array(
                'kode' => 'PK68',
                'nama' => 'NOTARIS',

            ),
            68 =>
            array(
                'kode' => 'PK69',
                'nama' => 'ARSITEK',

            ),
            69 =>
            array(
                'kode' => 'PK70',
                'nama' => 'AKUNTAN',

            ),
            70 =>
            array(
                'kode' => 'PK71',
                'nama' => 'KONSULTAN',

            ),
            71 =>
            array(
                'kode' => 'PK72',
                'nama' => 'DOKTER',

            ),
            72 =>
            array(
                'kode' => 'PK73',
                'nama' => 'BIDAN',

            ),
            73 =>
            array(
                'kode' => 'PK74',
                'nama' => 'PERAWAT',

            ),
            74 =>
            array(
                'kode' => 'PK75',
                'nama' => 'APOTEKER',

            ),
            75 =>
            array(
                'kode' => 'PK76',
                'nama' => 'PSIKIATER/PSIKOLOG',

            ),
            76 =>
            array(
                'kode' => 'PK77',
                'nama' => 'PENYIAR TELEVISI',

            ),
            77 =>
            array(
                'kode' => 'PK78',
                'nama' => 'PENYIAR RADIO',

            ),
            78 =>
            array(
                'kode' => 'PK79',
                'nama' => 'PELAUT',

            ),
            79 =>
            array(
                'kode' => 'PK80',
                'nama' => 'PENELITI',

            ),
            80 =>
            array(
                'kode' => 'PK81',
                'nama' => 'SOPIR',

            ),
            81 =>
            array(
                'kode' => 'PK82',
                'nama' => 'PIALANG',

            ),
            82 =>
            array(
                'kode' => 'PK83',
                'nama' => 'PARANORMAL',

            ),
            83 =>
            array(
                'kode' => 'PK84',
                'nama' => 'PEDAGANG',

            ),
            84 =>
            array(
                'kode' => 'PK85',
                'nama' => 'PERANGKAT DESA',

            ),
            85 =>
            array(
                'kode' => 'PK86',
                'nama' => 'KEPALA DESA',

            ),
            86 =>
            array(
                'kode' => 'PK87',
                'nama' => 'BIARAWATI',

            ),
            87 =>
            array(
                'kode' => 'PK88',
                'nama' => 'WIRASWASTA',
            ),
            88 =>
            array(
                'kode' => 'PK89',
                'nama' => 'LAINNYA',
            ),
        ));
    }
}
