<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KabupatenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kabupatens')->delete();

        DB::table('kabupatens')->insert(array(
            0 =>
            array(
                'kode' => '1101',
                'nama' => 'KAB. ACEH SELATAN',
                'kode_provinsi' => '11',
            ),
            1 =>
            array(
                'kode' => '1102',
                'nama' => 'KAB. ACEH TENGGARA',
                'kode_provinsi' => '11',
            ),
            2 =>
            array(
                'kode' => '1103',
                'nama' => 'KAB. ACEH TIMUR',
                'kode_provinsi' => '11',
            ),
            3 =>
            array(
                'kode' => '1104',
                'nama' => 'KAB. ACEH TENGAH',
                'kode_provinsi' => '11',
            ),
            4 =>
            array(
                'kode' => '1105',
                'nama' => 'KAB. ACEH BARAT',
                'kode_provinsi' => '11',
            ),
            5 =>
            array(
                'kode' => '1106',
                'nama' => 'KAB. ACEH BESAR',
                'kode_provinsi' => '11',
            ),
            6 =>
            array(
                'kode' => '1107',
                'nama' => 'KAB. PIDIE',
                'kode_provinsi' => '11',
            ),
            7 =>
            array(
                'kode' => '1108',
                'nama' => 'KAB. ACEH UTARA',
                'kode_provinsi' => '11',
            ),
            8 =>
            array(
                'kode' => '1109',
                'nama' => 'KAB. SIMEULUE',
                'kode_provinsi' => '11',
            ),
            9 =>
            array(
                'kode' => '1110',
                'nama' => 'KAB. ACEH SINGKIL',
                'kode_provinsi' => '11',
            ),
            10 =>
            array(
                'kode' => '1111',
                'nama' => 'KAB. BIREUEN',
                'kode_provinsi' => '11',
            ),
            11 =>
            array(
                'kode' => '1112',
                'nama' => 'KAB. ACEH BARAT DAYA',
                'kode_provinsi' => '11',
            ),
            12 =>
            array(
                'kode' => '1113',
                'nama' => 'KAB. GAYO LUES',
                'kode_provinsi' => '11',
            ),
            13 =>
            array(
                'kode' => '1114',
                'nama' => 'KAB. ACEH JAYA',
                'kode_provinsi' => '11',
            ),
            14 =>
            array(
                'kode' => '1115',
                'nama' => 'KAB. NAGAN RAYA',
                'kode_provinsi' => '11',
            ),
            15 =>
            array(
                'kode' => '1116',
                'nama' => 'KAB. ACEH TAMIANG',
                'kode_provinsi' => '11',
            ),
            16 =>
            array(
                'kode' => '1117',
                'nama' => 'KAB. BENER MERIAH',
                'kode_provinsi' => '11',
            ),
            17 =>
            array(
                'kode' => '1118',
                'nama' => 'KAB. PIDIE JAYA',
                'kode_provinsi' => '11',
            ),
            18 =>
            array(
                'kode' => '1171',
                'nama' => 'KOTA BANDA ACEH',
                'kode_provinsi' => '11',
            ),
            19 =>
            array(
                'kode' => '1172',
                'nama' => 'KOTA SABANG',
                'kode_provinsi' => '11',
            ),
            20 =>
            array(
                'kode' => '1173',
                'nama' => 'KOTA LHOKSEUMAWE',
                'kode_provinsi' => '11',
            ),
            21 =>
            array(
                'kode' => '1174',
                'nama' => 'KOTA LANGSA',
                'kode_provinsi' => '11',
            ),
            22 =>
            array(
                'kode' => '1175',
                'nama' => 'KOTA SUBULUSSALAM',
                'kode_provinsi' => '11',
            ),
            23 =>
            array(
                'kode' => '1201',
                'nama' => 'KAB. TAPANULI TENGAH',
                'kode_provinsi' => '12',
            ),
            24 =>
            array(
                'kode' => '1202',
                'nama' => 'KAB. TAPANULI UTARA',
                'kode_provinsi' => '12',
            ),
            25 =>
            array(
                'kode' => '1203',
                'nama' => 'KAB. TAPANULI SELATAN',
                'kode_provinsi' => '12',
            ),
            26 =>
            array(
                'kode' => '1204',
                'nama' => 'KAB. NIAS',
                'kode_provinsi' => '12',
            ),
            27 =>
            array(
                'kode' => '1205',
                'nama' => 'KAB. LANGKAT',
                'kode_provinsi' => '12',
            ),
            28 =>
            array(
                'kode' => '1206',
                'nama' => 'KAB. KARO',
                'kode_provinsi' => '12',
            ),
            29 =>
            array(
                'kode' => '1207',
                'nama' => 'KAB. DELI SERDANG',
                'kode_provinsi' => '12',
            ),
            30 =>
            array(
                'kode' => '1208',
                'nama' => 'KAB. SIMALUNGUN',
                'kode_provinsi' => '12',
            ),
            31 =>
            array(
                'kode' => '1209',
                'nama' => 'KAB. ASAHAN',
                'kode_provinsi' => '12',
            ),
            32 =>
            array(
                'kode' => '1210',
                'nama' => 'KAB. LABUHANBATU',
                'kode_provinsi' => '12',
            ),
            33 =>
            array(
                'kode' => '1211',
                'nama' => 'KAB. DAIRI',
                'kode_provinsi' => '12',
            ),
            34 =>
            array(
                'kode' => '1212',
                'nama' => 'KAB. TOBA',
                'kode_provinsi' => '12',
            ),
            35 =>
            array(
                'kode' => '1213',
                'nama' => 'KAB. MANDAILING NATAL',
                'kode_provinsi' => '12',
            ),
            36 =>
            array(
                'kode' => '1214',
                'nama' => 'KAB. NIAS SELATAN',
                'kode_provinsi' => '12',
            ),
            37 =>
            array(
                'kode' => '1215',
                'nama' => 'KAB. PAKPAK BHARAT',
                'kode_provinsi' => '12',
            ),
            38 =>
            array(
                'kode' => '1216',
                'nama' => 'KAB. HUMBANG HASUNDUTAN',
                'kode_provinsi' => '12',
            ),
            39 =>
            array(
                'kode' => '1217',
                'nama' => 'KAB. SAMOSIR',
                'kode_provinsi' => '12',
            ),
            40 =>
            array(
                'kode' => '1218',
                'nama' => 'KAB. SERDANG BEDAGAI',
                'kode_provinsi' => '12',
            ),
            41 =>
            array(
                'kode' => '1219',
                'nama' => 'KAB. BATU BARA',
                'kode_provinsi' => '12',
            ),
            42 =>
            array(
                'kode' => '1220',
                'nama' => 'KAB. PADANG LAWAS UTARA',
                'kode_provinsi' => '12',
            ),
            43 =>
            array(
                'kode' => '1221',
                'nama' => 'KAB. PADANG LAWAS',
                'kode_provinsi' => '12',
            ),
            44 =>
            array(
                'kode' => '1222',
                'nama' => 'KAB. LABUHANBATU SELATAN',
                'kode_provinsi' => '12',
            ),
            45 =>
            array(
                'kode' => '1223',
                'nama' => 'KAB. LABUHANBATU UTARA',
                'kode_provinsi' => '12',
            ),
            46 =>
            array(
                'kode' => '1224',
                'nama' => 'KAB. NIAS UTARA',
                'kode_provinsi' => '12',
            ),
            47 =>
            array(
                'kode' => '1225',
                'nama' => 'KAB. NIAS BARAT',
                'kode_provinsi' => '12',
            ),
            48 =>
            array(
                'kode' => '1271',
                'nama' => 'KOTA MEDAN',
                'kode_provinsi' => '12',
            ),
            49 =>
            array(
                'kode' => '1272',
                'nama' => 'KOTA PEMATANGSIANTAR',
                'kode_provinsi' => '12',
            ),
            50 =>
            array(
                'kode' => '1273',
                'nama' => 'KOTA SIBOLGA',
                'kode_provinsi' => '12',
            ),
            51 =>
            array(
                'kode' => '1274',
                'nama' => 'KOTA TANJUNG BALAI',
                'kode_provinsi' => '12',
            ),
            52 =>
            array(
                'kode' => '1275',
                'nama' => 'KOTA BINJAI',
                'kode_provinsi' => '12',
            ),
            53 =>
            array(
                'kode' => '1276',
                'nama' => 'KOTA TEBING TINGGI',
                'kode_provinsi' => '12',
            ),
            54 =>
            array(
                'kode' => '1277',
                'nama' => 'KOTA PADANGSIDIMPUAN',
                'kode_provinsi' => '12',
            ),
            55 =>
            array(
                'kode' => '1278',
                'nama' => 'KOTA GUNUNGSITOLI',
                'kode_provinsi' => '12',
            ),
            56 =>
            array(
                'kode' => '1301',
                'nama' => 'KAB. PESISIR SELATAN',
                'kode_provinsi' => '13',
            ),
            57 =>
            array(
                'kode' => '1302',
                'nama' => 'KAB. SOLOK',
                'kode_provinsi' => '13',
            ),
            58 =>
            array(
                'kode' => '1303',
                'nama' => 'KAB. SIJUNJUNG',
                'kode_provinsi' => '13',
            ),
            59 =>
            array(
                'kode' => '1304',
                'nama' => 'KAB. TANAH DATAR',
                'kode_provinsi' => '13',
            ),
            60 =>
            array(
                'kode' => '1305',
                'nama' => 'KAB. PADANG PARIAMAN',
                'kode_provinsi' => '13',
            ),
            61 =>
            array(
                'kode' => '1306',
                'nama' => 'KAB. AGAM',
                'kode_provinsi' => '13',
            ),
            62 =>
            array(
                'kode' => '1307',
                'nama' => 'KAB. LIMA PULUH KOTA',
                'kode_provinsi' => '13',
            ),
            63 =>
            array(
                'kode' => '1308',
                'nama' => 'KAB. PASAMAN',
                'kode_provinsi' => '13',
            ),
            64 =>
            array(
                'kode' => '1309',
                'nama' => 'KAB. KEPULAUAN MENTAWAI',
                'kode_provinsi' => '13',
            ),
            65 =>
            array(
                'kode' => '1310',
                'nama' => 'KAB. DHARMASRAYA',
                'kode_provinsi' => '13',
            ),
            66 =>
            array(
                'kode' => '1311',
                'nama' => 'KAB. SOLOK SELATAN',
                'kode_provinsi' => '13',
            ),
            67 =>
            array(
                'kode' => '1312',
                'nama' => 'KAB. PASAMAN BARAT',
                'kode_provinsi' => '13',
            ),
            68 =>
            array(
                'kode' => '1371',
                'nama' => 'KOTA PADANG',
                'kode_provinsi' => '13',
            ),
            69 =>
            array(
                'kode' => '1372',
                'nama' => 'KOTA SOLOK',
                'kode_provinsi' => '13',
            ),
            70 =>
            array(
                'kode' => '1373',
                'nama' => 'KOTA SAWAHLUNTO',
                'kode_provinsi' => '13',
            ),
            71 =>
            array(
                'kode' => '1374',
                'nama' => 'KOTA PADANG PANJANG',
                'kode_provinsi' => '13',
            ),
            72 =>
            array(
                'kode' => '1375',
                'nama' => 'KOTA BUKITTINGGI',
                'kode_provinsi' => '13',
            ),
            73 =>
            array(
                'kode' => '1376',
                'nama' => 'KOTA PAYAKUMBUH',
                'kode_provinsi' => '13',
            ),
            74 =>
            array(
                'kode' => '1377',
                'nama' => 'KOTA PARIAMAN',
                'kode_provinsi' => '13',
            ),
            75 =>
            array(
                'kode' => '1401',
                'nama' => 'KAB. KAMPAR',
                'kode_provinsi' => '14',
            ),
            76 =>
            array(
                'kode' => '1402',
                'nama' => 'KAB. INDRAGIRI HULU',
                'kode_provinsi' => '14',
            ),
            77 =>
            array(
                'kode' => '1403',
                'nama' => 'KAB. BENGKALIS',
                'kode_provinsi' => '14',
            ),
            78 =>
            array(
                'kode' => '1404',
                'nama' => 'KAB. INDRAGIRI HILIR',
                'kode_provinsi' => '14',
            ),
            79 =>
            array(
                'kode' => '1405',
                'nama' => 'KAB. PELALAWAN',
                'kode_provinsi' => '14',
            ),
            80 =>
            array(
                'kode' => '1406',
                'nama' => 'KAB. ROKAN HULU',
                'kode_provinsi' => '14',
            ),
            81 =>
            array(
                'kode' => '1407',
                'nama' => 'KAB. ROKAN HILIR',
                'kode_provinsi' => '14',
            ),
            82 =>
            array(
                'kode' => '1408',
                'nama' => 'KAB. SIAK',
                'kode_provinsi' => '14',
            ),
            83 =>
            array(
                'kode' => '1409',
                'nama' => 'KAB. KUANTAN SINGINGI',
                'kode_provinsi' => '14',
            ),
            84 =>
            array(
                'kode' => '1410',
                'nama' => 'KAB. KEPULAUAN MERANTI',
                'kode_provinsi' => '14',
            ),
            85 =>
            array(
                'kode' => '1471',
                'nama' => 'KOTA PEKANBARU',
                'kode_provinsi' => '14',
            ),
            86 =>
            array(
                'kode' => '1472',
                'nama' => 'KOTA DUMAI',
                'kode_provinsi' => '14',
            ),
            87 =>
            array(
                'kode' => '1501',
                'nama' => 'KAB. KERINCI',
                'kode_provinsi' => '15',
            ),
            88 =>
            array(
                'kode' => '1502',
                'nama' => 'KAB. MERANGIN',
                'kode_provinsi' => '15',
            ),
            89 =>
            array(
                'kode' => '1503',
                'nama' => 'KAB. SAROLANGUN',
                'kode_provinsi' => '15',
            ),
            90 =>
            array(
                'kode' => '1504',
                'nama' => 'KAB. BATANGHARI',
                'kode_provinsi' => '15',
            ),
            91 =>
            array(
                'kode' => '1505',
                'nama' => 'KAB. MUARO JAMBI',
                'kode_provinsi' => '15',
            ),
            92 =>
            array(
                'kode' => '1506',
                'nama' => 'KAB. TANJUNG JABUNG BARAT',
                'kode_provinsi' => '15',
            ),
            93 =>
            array(
                'kode' => '1507',
                'nama' => 'KAB. TANJUNG JABUNG TIMUR',
                'kode_provinsi' => '15',
            ),
            94 =>
            array(
                'kode' => '1508',
                'nama' => 'KAB. BUNGO',
                'kode_provinsi' => '15',
            ),
            95 =>
            array(
                'kode' => '1509',
                'nama' => 'KAB. TEBO',
                'kode_provinsi' => '15',
            ),
            96 =>
            array(
                'kode' => '1571',
                'nama' => 'KOTA JAMBI',
                'kode_provinsi' => '15',
            ),
            97 =>
            array(
                'kode' => '1572',
                'nama' => 'KOTA SUNGAI PENUH',
                'kode_provinsi' => '15',
            ),
            98 =>
            array(
                'kode' => '1601',
                'nama' => 'KAB. OGAN KOMERING ULU',
                'kode_provinsi' => '16',
            ),
            99 =>
            array(
                'kode' => '1602',
                'nama' => 'KAB. OGAN KOMERING ILIR',
                'kode_provinsi' => '16',
            ),
            100 =>
            array(
                'kode' => '1603',
                'nama' => 'KAB. MUARA ENIM',
                'kode_provinsi' => '16',
            ),
            101 =>
            array(
                'kode' => '1604',
                'nama' => 'KAB. LAHAT',
                'kode_provinsi' => '16',
            ),
            102 =>
            array(
                'kode' => '1605',
                'nama' => 'KAB. MUSI RAWAS',
                'kode_provinsi' => '16',
            ),
            103 =>
            array(
                'kode' => '1606',
                'nama' => 'KAB. MUSI BANYUASIN',
                'kode_provinsi' => '16',
            ),
            104 =>
            array(
                'kode' => '1607',
                'nama' => 'KAB. BANYUASIN',
                'kode_provinsi' => '16',
            ),
            105 =>
            array(
                'kode' => '1608',
                'nama' => 'KAB. OGAN KOMERING ULU TIMUR',
                'kode_provinsi' => '16',
            ),
            106 =>
            array(
                'kode' => '1609',
                'nama' => 'KAB. OGAN KOMERING ULU SELATAN',
                'kode_provinsi' => '16',
            ),
            107 =>
            array(
                'kode' => '1610',
                'nama' => 'KAB. OGAN ILIR',
                'kode_provinsi' => '16',
            ),
            108 =>
            array(
                'kode' => '1611',
                'nama' => 'KAB. EMPAT LAWANG',
                'kode_provinsi' => '16',
            ),
            109 =>
            array(
                'kode' => '1612',
                'nama' => 'KAB. PENUKAL ABAB LEMATANG ILIR',
                'kode_provinsi' => '16',
            ),
            110 =>
            array(
                'kode' => '1613',
                'nama' => 'KAB. MUSI RAWAS UTARA',
                'kode_provinsi' => '16',
            ),
            111 =>
            array(
                'kode' => '1671',
                'nama' => 'KOTA PALEMBANG',
                'kode_provinsi' => '16',
            ),
            112 =>
            array(
                'kode' => '1672',
                'nama' => 'KOTA PAGAR ALAM',
                'kode_provinsi' => '16',
            ),
            113 =>
            array(
                'kode' => '1673',
                'nama' => 'KOTA LUBUK LINGGAU',
                'kode_provinsi' => '16',
            ),
            114 =>
            array(
                'kode' => '1674',
                'nama' => 'KOTA PRABUMULIH',
                'kode_provinsi' => '16',
            ),
            115 =>
            array(
                'kode' => '1701',
                'nama' => 'KAB. BENGKULU SELATAN',
                'kode_provinsi' => '17',
            ),
            116 =>
            array(
                'kode' => '1702',
                'nama' => 'KAB. REJANG LEBONG',
                'kode_provinsi' => '17',
            ),
            117 =>
            array(
                'kode' => '1703',
                'nama' => 'KAB. BENGKULU UTARA',
                'kode_provinsi' => '17',
            ),
            118 =>
            array(
                'kode' => '1704',
                'nama' => 'KAB. KAUR',
                'kode_provinsi' => '17',
            ),
            119 =>
            array(
                'kode' => '1705',
                'nama' => 'KAB. SELUMA',
                'kode_provinsi' => '17',
            ),
            120 =>
            array(
                'kode' => '1706',
                'nama' => 'KAB. MUKO MUKO',
                'kode_provinsi' => '17',
            ),
            121 =>
            array(
                'kode' => '1707',
                'nama' => 'KAB. LEBONG',
                'kode_provinsi' => '17',
            ),
            122 =>
            array(
                'kode' => '1708',
                'nama' => 'KAB. KEPAHIANG',
                'kode_provinsi' => '17',
            ),
            123 =>
            array(
                'kode' => '1709',
                'nama' => 'KAB. BENGKULU TENGAH',
                'kode_provinsi' => '17',
            ),
            124 =>
            array(
                'kode' => '1771',
                'nama' => 'KOTA BENGKULU',
                'kode_provinsi' => '17',
            ),
            125 =>
            array(
                'kode' => '1801',
                'nama' => 'KAB. LAMPUNG SELATAN',
                'kode_provinsi' => '18',
            ),
            126 =>
            array(
                'kode' => '1802',
                'nama' => 'KAB. LAMPUNG TENGAH',
                'kode_provinsi' => '18',
            ),
            127 =>
            array(
                'kode' => '1803',
                'nama' => 'KAB. LAMPUNG UTARA',
                'kode_provinsi' => '18',
            ),
            128 =>
            array(
                'kode' => '1804',
                'nama' => 'KAB. LAMPUNG BARAT',
                'kode_provinsi' => '18',
            ),
            129 =>
            array(
                'kode' => '1805',
                'nama' => 'KAB. TULANG BAWANG',
                'kode_provinsi' => '18',
            ),
            130 =>
            array(
                'kode' => '1806',
                'nama' => 'KAB. TANGGAMUS',
                'kode_provinsi' => '18',
            ),
            131 =>
            array(
                'kode' => '1807',
                'nama' => 'KAB. LAMPUNG TIMUR',
                'kode_provinsi' => '18',
            ),
            132 =>
            array(
                'kode' => '1808',
                'nama' => 'KAB. WAY KANAN',
                'kode_provinsi' => '18',
            ),
            133 =>
            array(
                'kode' => '1809',
                'nama' => 'KAB. PESAWARAN',
                'kode_provinsi' => '18',
            ),
            134 =>
            array(
                'kode' => '1810',
                'nama' => 'KAB. PRINGSEWU',
                'kode_provinsi' => '18',
            ),
            135 =>
            array(
                'kode' => '1811',
                'nama' => 'KAB. MESUJI',
                'kode_provinsi' => '18',
            ),
            136 =>
            array(
                'kode' => '1812',
                'nama' => 'KAB. TULANG BAWANG BARAT',
                'kode_provinsi' => '18',
            ),
            137 =>
            array(
                'kode' => '1813',
                'nama' => 'KAB. PESISIR BARAT',
                'kode_provinsi' => '18',
            ),
            138 =>
            array(
                'kode' => '1871',
                'nama' => 'KOTA BANDAR LAMPUNG',
                'kode_provinsi' => '18',
            ),
            139 =>
            array(
                'kode' => '1872',
                'nama' => 'KOTA METRO',
                'kode_provinsi' => '18',
            ),
            140 =>
            array(
                'kode' => '1901',
                'nama' => 'KAB. BANGKA',
                'kode_provinsi' => '19',
            ),
            141 =>
            array(
                'kode' => '1902',
                'nama' => 'KAB. BELITUNG',
                'kode_provinsi' => '19',
            ),
            142 =>
            array(
                'kode' => '1903',
                'nama' => 'KAB. BANGKA SELATAN',
                'kode_provinsi' => '19',
            ),
            143 =>
            array(
                'kode' => '1904',
                'nama' => 'KAB. BANGKA TENGAH',
                'kode_provinsi' => '19',
            ),
            144 =>
            array(
                'kode' => '1905',
                'nama' => 'KAB. BANGKA BARAT',
                'kode_provinsi' => '19',
            ),
            145 =>
            array(
                'kode' => '1906',
                'nama' => 'KAB. BELITUNG TIMUR',
                'kode_provinsi' => '19',
            ),
            146 =>
            array(
                'kode' => '1971',
                'nama' => 'KOTA PANGKAL PINANG',
                'kode_provinsi' => '19',
            ),
            147 =>
            array(
                'kode' => '2101',
                'nama' => 'KAB. BINTAN',
                'kode_provinsi' => '21',
            ),
            148 =>
            array(
                'kode' => '2102',
                'nama' => 'KAB. KARIMUN',
                'kode_provinsi' => '21',
            ),
            149 =>
            array(
                'kode' => '2103',
                'nama' => 'KAB. NATUNA',
                'kode_provinsi' => '21',
            ),
            150 =>
            array(
                'kode' => '2104',
                'nama' => 'KAB. LINGGA',
                'kode_provinsi' => '21',
            ),
            151 =>
            array(
                'kode' => '2105',
                'nama' => 'KAB. KEPULAUAN ANAMBAS',
                'kode_provinsi' => '21',
            ),
            152 =>
            array(
                'kode' => '2171',
                'nama' => 'KOTA BATAM',
                'kode_provinsi' => '21',
            ),
            153 =>
            array(
                'kode' => '2172',
                'nama' => 'KOTA TANJUNG PINANG',
                'kode_provinsi' => '21',
            ),
            154 =>
            array(
                'kode' => '3101',
                'nama' => 'KAB. ADM. KEP. SERIBU',
                'kode_provinsi' => '31',
            ),
            155 =>
            array(
                'kode' => '3171',
                'nama' => 'KOTA ADM. JAKARTA PUSAT',
                'kode_provinsi' => '31',
            ),
            156 =>
            array(
                'kode' => '3172',
                'nama' => 'KOTA ADM. JAKARTA UTARA',
                'kode_provinsi' => '31',
            ),
            157 =>
            array(
                'kode' => '3173',
                'nama' => 'KOTA ADM. JAKARTA BARAT',
                'kode_provinsi' => '31',
            ),
            158 =>
            array(
                'kode' => '3174',
                'nama' => 'KOTA ADM. JAKARTA SELATAN',
                'kode_provinsi' => '31',
            ),
            159 =>
            array(
                'kode' => '3175',
                'nama' => 'KOTA ADM. JAKARTA TIMUR',
                'kode_provinsi' => '31',
            ),
            160 =>
            array(
                'kode' => '3201',
                'nama' => 'KAB. BOGOR',
                'kode_provinsi' => '32',
            ),
            161 =>
            array(
                'kode' => '3202',
                'nama' => 'KAB. SUKABUMI',
                'kode_provinsi' => '32',
            ),
            162 =>
            array(
                'kode' => '3203',
                'nama' => 'KAB. CIANJUR',
                'kode_provinsi' => '32',
            ),
            163 =>
            array(
                'kode' => '3204',
                'nama' => 'KAB. BANDUNG',
                'kode_provinsi' => '32',
            ),
            164 =>
            array(
                'kode' => '3205',
                'nama' => 'KAB. GARUT',
                'kode_provinsi' => '32',
            ),
            165 =>
            array(
                'kode' => '3206',
                'nama' => 'KAB. TASIKMALAYA',
                'kode_provinsi' => '32',
            ),
            166 =>
            array(
                'kode' => '3207',
                'nama' => 'KAB. CIAMIS',
                'kode_provinsi' => '32',
            ),
            167 =>
            array(
                'kode' => '3208',
                'nama' => 'KAB. KUNINGAN',
                'kode_provinsi' => '32',
            ),
            168 =>
            array(
                'kode' => '3209',
                'nama' => 'KAB. CIREBON',
                'kode_provinsi' => '32',
            ),
            169 =>
            array(
                'kode' => '3210',
                'nama' => 'KAB. MAJALENGKA',
                'kode_provinsi' => '32',
            ),
            170 =>
            array(
                'kode' => '3211',
                'nama' => 'KAB. SUMEDANG',
                'kode_provinsi' => '32',
            ),
            171 =>
            array(
                'kode' => '3212',
                'nama' => 'KAB. INDRAMAYU',
                'kode_provinsi' => '32',
            ),
            172 =>
            array(
                'kode' => '3213',
                'nama' => 'KAB. SUBANG',
                'kode_provinsi' => '32',
            ),
            173 =>
            array(
                'kode' => '3214',
                'nama' => 'KAB. PURWAKARTA',
                'kode_provinsi' => '32',
            ),
            174 =>
            array(
                'kode' => '3215',
                'nama' => 'KAB. KARAWANG',
                'kode_provinsi' => '32',
            ),
            175 =>
            array(
                'kode' => '3216',
                'nama' => 'KAB. BEKASI',
                'kode_provinsi' => '32',
            ),
            176 =>
            array(
                'kode' => '3217',
                'nama' => 'KAB. BANDUNG BARAT',
                'kode_provinsi' => '32',
            ),
            177 =>
            array(
                'kode' => '3218',
                'nama' => 'KAB. PANGANDARAN',
                'kode_provinsi' => '32',
            ),
            178 =>
            array(
                'kode' => '3271',
                'nama' => 'KOTA BOGOR',
                'kode_provinsi' => '32',
            ),
            179 =>
            array(
                'kode' => '3272',
                'nama' => 'KOTA SUKABUMI',
                'kode_provinsi' => '32',
            ),
            180 =>
            array(
                'kode' => '3273',
                'nama' => 'KOTA BANDUNG',
                'kode_provinsi' => '32',
            ),
            181 =>
            array(
                'kode' => '3274',
                'nama' => 'KOTA CIREBON',
                'kode_provinsi' => '32',
            ),
            182 =>
            array(
                'kode' => '3275',
                'nama' => 'KOTA BEKASI',
                'kode_provinsi' => '32',
            ),
            183 =>
            array(
                'kode' => '3276',
                'nama' => 'KOTA DEPOK',
                'kode_provinsi' => '32',
            ),
            184 =>
            array(
                'kode' => '3277',
                'nama' => 'KOTA CIMAHI',
                'kode_provinsi' => '32',
            ),
            185 =>
            array(
                'kode' => '3278',
                'nama' => 'KOTA TASIKMALAYA',
                'kode_provinsi' => '32',
            ),
            186 =>
            array(
                'kode' => '3279',
                'nama' => 'KOTA BANJAR',
                'kode_provinsi' => '32',
            ),
            187 =>
            array(
                'kode' => '3301',
                'nama' => 'KAB. CILACAP',
                'kode_provinsi' => '33',
            ),
            188 =>
            array(
                'kode' => '3302',
                'nama' => 'KAB. BANYUMAS',
                'kode_provinsi' => '33',
            ),
            189 =>
            array(
                'kode' => '3303',
                'nama' => 'KAB. PURBALINGGA',
                'kode_provinsi' => '33',
            ),
            190 =>
            array(
                'kode' => '3304',
                'nama' => 'KAB. BANJARNEGARA',
                'kode_provinsi' => '33',
            ),
            191 =>
            array(
                'kode' => '3305',
                'nama' => 'KAB. KEBUMEN',
                'kode_provinsi' => '33',
            ),
            192 =>
            array(
                'kode' => '3306',
                'nama' => 'KAB. PURWOREJO',
                'kode_provinsi' => '33',
            ),
            193 =>
            array(
                'kode' => '3307',
                'nama' => 'KAB. WONOSOBO',
                'kode_provinsi' => '33',
            ),
            194 =>
            array(
                'kode' => '3308',
                'nama' => 'KAB. MAGELANG',
                'kode_provinsi' => '33',
            ),
            195 =>
            array(
                'kode' => '3309',
                'nama' => 'KAB. BOYOLALI',
                'kode_provinsi' => '33',
            ),
            196 =>
            array(
                'kode' => '3310',
                'nama' => 'KAB. KLATEN',
                'kode_provinsi' => '33',
            ),
            197 =>
            array(
                'kode' => '3311',
                'nama' => 'KAB. SUKOHARJO',
                'kode_provinsi' => '33',
            ),
            198 =>
            array(
                'kode' => '3312',
                'nama' => 'KAB. WONOGIRI',
                'kode_provinsi' => '33',
            ),
            199 =>
            array(
                'kode' => '3313',
                'nama' => 'KAB. KARANGANYAR',
                'kode_provinsi' => '33',
            ),
            200 =>
            array(
                'kode' => '3314',
                'nama' => 'KAB. SRAGEN',
                'kode_provinsi' => '33',
            ),
            201 =>
            array(
                'kode' => '3315',
                'nama' => 'KAB. GROBOGAN',
                'kode_provinsi' => '33',
            ),
            202 =>
            array(
                'kode' => '3316',
                'nama' => 'KAB. BLORA',
                'kode_provinsi' => '33',
            ),
            203 =>
            array(
                'kode' => '3317',
                'nama' => 'KAB. REMBANG',
                'kode_provinsi' => '33',
            ),
            204 =>
            array(
                'kode' => '3318',
                'nama' => 'KAB. PATI',
                'kode_provinsi' => '33',
            ),
            205 =>
            array(
                'kode' => '3319',
                'nama' => 'KAB. KUDUS',
                'kode_provinsi' => '33',
            ),
            206 =>
            array(
                'kode' => '3320',
                'nama' => 'KAB. JEPARA',
                'kode_provinsi' => '33',
            ),
            207 =>
            array(
                'kode' => '3321',
                'nama' => 'KAB. DEMAK',
                'kode_provinsi' => '33',
            ),
            208 =>
            array(
                'kode' => '3322',
                'nama' => 'KAB. SEMARANG',
                'kode_provinsi' => '33',
            ),
            209 =>
            array(
                'kode' => '3323',
                'nama' => 'KAB. TEMANGGUNG',
                'kode_provinsi' => '33',
            ),
            210 =>
            array(
                'kode' => '3324',
                'nama' => 'KAB. KENDAL',
                'kode_provinsi' => '33',
            ),
            211 =>
            array(
                'kode' => '3325',
                'nama' => 'KAB. BATANG',
                'kode_provinsi' => '33',
            ),
            212 =>
            array(
                'kode' => '3326',
                'nama' => 'KAB. PEKALONGAN',
                'kode_provinsi' => '33',
            ),
            213 =>
            array(
                'kode' => '3327',
                'nama' => 'KAB. PEMALANG',
                'kode_provinsi' => '33',
            ),
            214 =>
            array(
                'kode' => '3328',
                'nama' => 'KAB. TEGAL',
                'kode_provinsi' => '33',
            ),
            215 =>
            array(
                'kode' => '3329',
                'nama' => 'KAB. BREBES',
                'kode_provinsi' => '33',
            ),
            216 =>
            array(
                'kode' => '3371',
                'nama' => 'KOTA MAGELANG',
                'kode_provinsi' => '33',
            ),
            217 =>
            array(
                'kode' => '3372',
                'nama' => 'KOTA SURAKARTA',
                'kode_provinsi' => '33',
            ),
            218 =>
            array(
                'kode' => '3373',
                'nama' => 'KOTA SALATIGA',
                'kode_provinsi' => '33',
            ),
            219 =>
            array(
                'kode' => '3374',
                'nama' => 'KOTA SEMARANG',
                'kode_provinsi' => '33',
            ),
            220 =>
            array(
                'kode' => '3375',
                'nama' => 'KOTA PEKALONGAN',
                'kode_provinsi' => '33',
            ),
            221 =>
            array(
                'kode' => '3376',
                'nama' => 'KOTA TEGAL',
                'kode_provinsi' => '33',
            ),
            222 =>
            array(
                'kode' => '3401',
                'nama' => 'KAB. KULON PROGO',
                'kode_provinsi' => '34',
            ),
            223 =>
            array(
                'kode' => '3402',
                'nama' => 'KAB. BANTUL',
                'kode_provinsi' => '34',
            ),
            224 =>
            array(
                'kode' => '3403',
                'nama' => 'KAB. GUNUNGKIDUL',
                'kode_provinsi' => '34',
            ),
            225 =>
            array(
                'kode' => '3404',
                'nama' => 'KAB. SLEMAN',
                'kode_provinsi' => '34',
            ),
            226 =>
            array(
                'kode' => '3471',
                'nama' => 'KOTA YOGYAKARTA',
                'kode_provinsi' => '34',
            ),
            227 =>
            array(
                'kode' => '3501',
                'nama' => 'KAB. PACITAN',
                'kode_provinsi' => '35',
            ),
            228 =>
            array(
                'kode' => '3502',
                'nama' => 'KAB. PONOROGO',
                'kode_provinsi' => '35',
            ),
            229 =>
            array(
                'kode' => '3503',
                'nama' => 'KAB. TRENGGALEK',
                'kode_provinsi' => '35',
            ),
            230 =>
            array(
                'kode' => '3504',
                'nama' => 'KAB. TULUNGAGUNG',
                'kode_provinsi' => '35',
            ),
            231 =>
            array(
                'kode' => '3505',
                'nama' => 'KAB. BLITAR',
                'kode_provinsi' => '35',
            ),
            232 =>
            array(
                'kode' => '3506',
                'nama' => 'KAB. KEDIRI',
                'kode_provinsi' => '35',
            ),
            233 =>
            array(
                'kode' => '3507',
                'nama' => 'KAB. MALANG',
                'kode_provinsi' => '35',
            ),
            234 =>
            array(
                'kode' => '3508',
                'nama' => 'KAB. LUMAJANG',
                'kode_provinsi' => '35',
            ),
            235 =>
            array(
                'kode' => '3509',
                'nama' => 'KAB. JEMBER',
                'kode_provinsi' => '35',
            ),
            236 =>
            array(
                'kode' => '3510',
                'nama' => 'KAB. BANYUWANGI',
                'kode_provinsi' => '35',
            ),
            237 =>
            array(
                'kode' => '3511',
                'nama' => 'KAB. BONDOWOSO',
                'kode_provinsi' => '35',
            ),
            238 =>
            array(
                'kode' => '3512',
                'nama' => 'KAB. SITUBONDO',
                'kode_provinsi' => '35',
            ),
            239 =>
            array(
                'kode' => '3513',
                'nama' => 'KAB. PROBOLINGGO',
                'kode_provinsi' => '35',
            ),
            240 =>
            array(
                'kode' => '3514',
                'nama' => 'KAB. PASURUAN',
                'kode_provinsi' => '35',
            ),
            241 =>
            array(
                'kode' => '3515',
                'nama' => 'KAB. SIDOARJO',
                'kode_provinsi' => '35',
            ),
            242 =>
            array(
                'kode' => '3516',
                'nama' => 'KAB. MOJOKERTO',
                'kode_provinsi' => '35',
            ),
            243 =>
            array(
                'kode' => '3517',
                'nama' => 'KAB. JOMBANG',
                'kode_provinsi' => '35',
            ),
            244 =>
            array(
                'kode' => '3518',
                'nama' => 'KAB. NGANJUK',
                'kode_provinsi' => '35',
            ),
            245 =>
            array(
                'kode' => '3519',
                'nama' => 'KAB. MADIUN',
                'kode_provinsi' => '35',
            ),
            246 =>
            array(
                'kode' => '3520',
                'nama' => 'KAB. MAGETAN',
                'kode_provinsi' => '35',
            ),
            247 =>
            array(
                'kode' => '3521',
                'nama' => 'KAB. NGAWI',
                'kode_provinsi' => '35',
            ),
            248 =>
            array(
                'kode' => '3522',
                'nama' => 'KAB. BOJONEGORO',
                'kode_provinsi' => '35',
            ),
            249 =>
            array(
                'kode' => '3523',
                'nama' => 'KAB. TUBAN',
                'kode_provinsi' => '35',
            ),
            250 =>
            array(
                'kode' => '3524',
                'nama' => 'KAB. LAMONGAN',
                'kode_provinsi' => '35',
            ),
            251 =>
            array(
                'kode' => '3525',
                'nama' => 'KAB. GRESIK',
                'kode_provinsi' => '35',
            ),
            252 =>
            array(
                'kode' => '3526',
                'nama' => 'KAB. BANGKALAN',
                'kode_provinsi' => '35',
            ),
            253 =>
            array(
                'kode' => '3527',
                'nama' => 'KAB. SAMPANG',
                'kode_provinsi' => '35',
            ),
            254 =>
            array(
                'kode' => '3528',
                'nama' => 'KAB. PAMEKASAN',
                'kode_provinsi' => '35',
            ),
            255 =>
            array(
                'kode' => '3529',
                'nama' => 'KAB. SUMENEP',
                'kode_provinsi' => '35',
            ),
            256 =>
            array(
                'kode' => '3571',
                'nama' => 'KOTA KEDIRI',
                'kode_provinsi' => '35',
            ),
            257 =>
            array(
                'kode' => '3572',
                'nama' => 'KOTA BLITAR',
                'kode_provinsi' => '35',
            ),
            258 =>
            array(
                'kode' => '3573',
                'nama' => 'KOTA MALANG',
                'kode_provinsi' => '35',
            ),
            259 =>
            array(
                'kode' => '3574',
                'nama' => 'KOTA PROBOLINGGO',
                'kode_provinsi' => '35',
            ),
            260 =>
            array(
                'kode' => '3575',
                'nama' => 'KOTA PASURUAN',
                'kode_provinsi' => '35',
            ),
            261 =>
            array(
                'kode' => '3576',
                'nama' => 'KOTA MOJOKERTO',
                'kode_provinsi' => '35',
            ),
            262 =>
            array(
                'kode' => '3577',
                'nama' => 'KOTA MADIUN',
                'kode_provinsi' => '35',
            ),
            263 =>
            array(
                'kode' => '3578',
                'nama' => 'KOTA SURABAYA',
                'kode_provinsi' => '35',
            ),
            264 =>
            array(
                'kode' => '3579',
                'nama' => 'KOTA BATU',
                'kode_provinsi' => '35',
            ),
            265 =>
            array(
                'kode' => '3601',
                'nama' => 'KAB. PANDEGLANG',
                'kode_provinsi' => '36',
            ),
            266 =>
            array(
                'kode' => '3602',
                'nama' => 'KAB. LEBAK',
                'kode_provinsi' => '36',
            ),
            267 =>
            array(
                'kode' => '3603',
                'nama' => 'KAB. TANGERANG',
                'kode_provinsi' => '36',
            ),
            268 =>
            array(
                'kode' => '3604',
                'nama' => 'KAB. SERANG',
                'kode_provinsi' => '36',
            ),
            269 =>
            array(
                'kode' => '3671',
                'nama' => 'KOTA TANGERANG',
                'kode_provinsi' => '36',
            ),
            270 =>
            array(
                'kode' => '3672',
                'nama' => 'KOTA CILEGON',
                'kode_provinsi' => '36',
            ),
            271 =>
            array(
                'kode' => '3673',
                'nama' => 'KOTA SERANG',
                'kode_provinsi' => '36',
            ),
            272 =>
            array(
                'kode' => '3674',
                'nama' => 'KOTA TANGERANG SELATAN',
                'kode_provinsi' => '36',
            ),
            273 =>
            array(
                'kode' => '5101',
                'nama' => 'KAB. JEMBRANA',
                'kode_provinsi' => '51',
            ),
            274 =>
            array(
                'kode' => '5102',
                'nama' => 'KAB. TABANAN',
                'kode_provinsi' => '51',
            ),
            275 =>
            array(
                'kode' => '5103',
                'nama' => 'KAB. BADUNG',
                'kode_provinsi' => '51',
            ),
            276 =>
            array(
                'kode' => '5104',
                'nama' => 'KAB. GIANYAR',
                'kode_provinsi' => '51',
            ),
            277 =>
            array(
                'kode' => '5105',
                'nama' => 'KAB. KLUNGKUNG',
                'kode_provinsi' => '51',
            ),
            278 =>
            array(
                'kode' => '5106',
                'nama' => 'KAB. BANGLI',
                'kode_provinsi' => '51',
            ),
            279 =>
            array(
                'kode' => '5107',
                'nama' => 'KAB. KARANGASEM',
                'kode_provinsi' => '51',
            ),
            280 =>
            array(
                'kode' => '5108',
                'nama' => 'KAB. BULELENG',
                'kode_provinsi' => '51',
            ),
            281 =>
            array(
                'kode' => '5171',
                'nama' => 'KOTA DENPASAR',
                'kode_provinsi' => '51',
            ),
            282 =>
            array(
                'kode' => '5201',
                'nama' => 'KAB. LOMBOK BARAT',
                'kode_provinsi' => '52',
            ),
            283 =>
            array(
                'kode' => '5202',
                'nama' => 'KAB. LOMBOK TENGAH',
                'kode_provinsi' => '52',
            ),
            284 =>
            array(
                'kode' => '5203',
                'nama' => 'KAB. LOMBOK TIMUR',
                'kode_provinsi' => '52',
            ),
            285 =>
            array(
                'kode' => '5204',
                'nama' => 'KAB. SUMBAWA',
                'kode_provinsi' => '52',
            ),
            286 =>
            array(
                'kode' => '5205',
                'nama' => 'KAB. DOMPU',
                'kode_provinsi' => '52',
            ),
            287 =>
            array(
                'kode' => '5206',
                'nama' => 'KAB. BIMA',
                'kode_provinsi' => '52',
            ),
            288 =>
            array(
                'kode' => '5207',
                'nama' => 'KAB. SUMBAWA BARAT',
                'kode_provinsi' => '52',
            ),
            289 =>
            array(
                'kode' => '5208',
                'nama' => 'KAB. LOMBOK UTARA',
                'kode_provinsi' => '52',
            ),
            290 =>
            array(
                'kode' => '5271',
                'nama' => 'KOTA MATARAM',
                'kode_provinsi' => '52',
            ),
            291 =>
            array(
                'kode' => '5272',
                'nama' => 'KOTA BIMA',
                'kode_provinsi' => '52',
            ),
            292 =>
            array(
                'kode' => '5301',
                'nama' => 'KAB. KUPANG',
                'kode_provinsi' => '53',
            ),
            293 =>
            array(
                'kode' => '5302',
                'nama' => 'KAB TIMOR TENGAH SELATAN',
                'kode_provinsi' => '53',
            ),
            294 =>
            array(
                'kode' => '5303',
                'nama' => 'KAB. TIMOR TENGAH UTARA',
                'kode_provinsi' => '53',
            ),
            295 =>
            array(
                'kode' => '5304',
                'nama' => 'KAB. BELU',
                'kode_provinsi' => '53',
            ),
            296 =>
            array(
                'kode' => '5305',
                'nama' => 'KAB. ALOR',
                'kode_provinsi' => '53',
            ),
            297 =>
            array(
                'kode' => '5306',
                'nama' => 'KAB. FLORES TIMUR',
                'kode_provinsi' => '53',
            ),
            298 =>
            array(
                'kode' => '5307',
                'nama' => 'KAB. SIKKA',
                'kode_provinsi' => '53',
            ),
            299 =>
            array(
                'kode' => '5308',
                'nama' => 'KAB. ENDE',
                'kode_provinsi' => '53',
            ),
            300 =>
            array(
                'kode' => '5309',
                'nama' => 'KAB. NGADA',
                'kode_provinsi' => '53',
            ),
            301 =>
            array(
                'kode' => '5310',
                'nama' => 'KAB. MANGGARAI',
                'kode_provinsi' => '53',
            ),
            302 =>
            array(
                'kode' => '5311',
                'nama' => 'KAB. SUMBA TIMUR',
                'kode_provinsi' => '53',
            ),
            303 =>
            array(
                'kode' => '5312',
                'nama' => 'KAB. SUMBA BARAT',
                'kode_provinsi' => '53',
            ),
            304 =>
            array(
                'kode' => '5313',
                'nama' => 'KAB. LEMBATA',
                'kode_provinsi' => '53',
            ),
            305 =>
            array(
                'kode' => '5314',
                'nama' => 'KAB. ROTE NDAO',
                'kode_provinsi' => '53',
            ),
            306 =>
            array(
                'kode' => '5315',
                'nama' => 'KAB. MANGGARAI BARAT',
                'kode_provinsi' => '53',
            ),
            307 =>
            array(
                'kode' => '5316',
                'nama' => 'KAB. NAGEKEO',
                'kode_provinsi' => '53',
            ),
            308 =>
            array(
                'kode' => '5317',
                'nama' => 'KAB. SUMBA TENGAH',
                'kode_provinsi' => '53',
            ),
            309 =>
            array(
                'kode' => '5318',
                'nama' => 'KAB. SUMBA BARAT DAYA',
                'kode_provinsi' => '53',
            ),
            310 =>
            array(
                'kode' => '5319',
                'nama' => 'KAB. MANGGARAI TIMUR',
                'kode_provinsi' => '53',
            ),
            311 =>
            array(
                'kode' => '5320',
                'nama' => 'KAB. SABU RAIJUA',
                'kode_provinsi' => '53',
            ),
            312 =>
            array(
                'kode' => '5321',
                'nama' => 'KAB. MALAKA',
                'kode_provinsi' => '53',
            ),
            313 =>
            array(
                'kode' => '5371',
                'nama' => 'KOTA KUPANG',
                'kode_provinsi' => '53',
            ),
            314 =>
            array(
                'kode' => '6101',
                'nama' => 'KAB. SAMBAS',
                'kode_provinsi' => '61',
            ),
            315 =>
            array(
                'kode' => '6102',
                'nama' => 'KAB. MEMPAWAH',
                'kode_provinsi' => '61',
            ),
            316 =>
            array(
                'kode' => '6103',
                'nama' => 'KAB. SANGGAU',
                'kode_provinsi' => '61',
            ),
            317 =>
            array(
                'kode' => '6104',
                'nama' => 'KAB. KETAPANG',
                'kode_provinsi' => '61',
            ),
            318 =>
            array(
                'kode' => '6105',
                'nama' => 'KAB. SINTANG',
                'kode_provinsi' => '61',
            ),
            319 =>
            array(
                'kode' => '6106',
                'nama' => 'KAB. KAPUAS HULU',
                'kode_provinsi' => '61',
            ),
            320 =>
            array(
                'kode' => '6107',
                'nama' => 'KAB. BENGKAYANG',
                'kode_provinsi' => '61',
            ),
            321 =>
            array(
                'kode' => '6108',
                'nama' => 'KAB. LANDAK',
                'kode_provinsi' => '61',
            ),
            322 =>
            array(
                'kode' => '6109',
                'nama' => 'KAB. SEKADAU',
                'kode_provinsi' => '61',
            ),
            323 =>
            array(
                'kode' => '6110',
                'nama' => 'KAB. MELAWI',
                'kode_provinsi' => '61',
            ),
            324 =>
            array(
                'kode' => '6111',
                'nama' => 'KAB. KAYONG UTARA',
                'kode_provinsi' => '61',
            ),
            325 =>
            array(
                'kode' => '6112',
                'nama' => 'KAB. KUBU RAYA',
                'kode_provinsi' => '61',
            ),
            326 =>
            array(
                'kode' => '6171',
                'nama' => 'KOTA PONTIANAK',
                'kode_provinsi' => '61',
            ),
            327 =>
            array(
                'kode' => '6172',
                'nama' => 'KOTA SINGKAWANG',
                'kode_provinsi' => '61',
            ),
            328 =>
            array(
                'kode' => '6201',
                'nama' => 'KAB. KOTAWARINGIN BARAT',
                'kode_provinsi' => '62',
            ),
            329 =>
            array(
                'kode' => '6202',
                'nama' => 'KAB. KOTAWARINGIN TIMUR',
                'kode_provinsi' => '62',
            ),
            330 =>
            array(
                'kode' => '6203',
                'nama' => 'KAB. KAPUAS',
                'kode_provinsi' => '62',
            ),
            331 =>
            array(
                'kode' => '6204',
                'nama' => 'KAB. BARITO SELATAN',
                'kode_provinsi' => '62',
            ),
            332 =>
            array(
                'kode' => '6205',
                'nama' => 'KAB. BARITO UTARA',
                'kode_provinsi' => '62',
            ),
            333 =>
            array(
                'kode' => '6206',
                'nama' => 'KAB. KATINGAN',
                'kode_provinsi' => '62',
            ),
            334 =>
            array(
                'kode' => '6207',
                'nama' => 'KAB. SERUYAN',
                'kode_provinsi' => '62',
            ),
            335 =>
            array(
                'kode' => '6208',
                'nama' => 'KAB. SUKAMARA',
                'kode_provinsi' => '62',
            ),
            336 =>
            array(
                'kode' => '6209',
                'nama' => 'KAB. LAMANDAU',
                'kode_provinsi' => '62',
            ),
            337 =>
            array(
                'kode' => '6210',
                'nama' => 'KAB. GUNUNG MAS',
                'kode_provinsi' => '62',
            ),
            338 =>
            array(
                'kode' => '6211',
                'nama' => 'KAB. PULANG PISAU',
                'kode_provinsi' => '62',
            ),
            339 =>
            array(
                'kode' => '6212',
                'nama' => 'KAB. MURUNG RAYA',
                'kode_provinsi' => '62',
            ),
            340 =>
            array(
                'kode' => '6213',
                'nama' => 'KAB. BARITO TIMUR',
                'kode_provinsi' => '62',
            ),
            341 =>
            array(
                'kode' => '6271',
                'nama' => 'KOTA PALANGKARAYA',
                'kode_provinsi' => '62',
            ),
            342 =>
            array(
                'kode' => '6301',
                'nama' => 'KAB. TANAH LAUT',
                'kode_provinsi' => '63',
            ),
            343 =>
            array(
                'kode' => '6302',
                'nama' => 'KAB. KOTABARU',
                'kode_provinsi' => '63',
            ),
            344 =>
            array(
                'kode' => '6303',
                'nama' => 'KAB. BANJAR',
                'kode_provinsi' => '63',
            ),
            345 =>
            array(
                'kode' => '6304',
                'nama' => 'KAB. BARITO KUALA',
                'kode_provinsi' => '63',
            ),
            346 =>
            array(
                'kode' => '6305',
                'nama' => 'KAB. TAPIN',
                'kode_provinsi' => '63',
            ),
            347 =>
            array(
                'kode' => '6306',
                'nama' => 'KAB. HULU SUNGAI SELATAN',
                'kode_provinsi' => '63',
            ),
            348 =>
            array(
                'kode' => '6307',
                'nama' => 'KAB. HULU SUNGAI TENGAH',
                'kode_provinsi' => '63',
            ),
            349 =>
            array(
                'kode' => '6308',
                'nama' => 'KAB. HULU SUNGAI UTARA',
                'kode_provinsi' => '63',
            ),
            350 =>
            array(
                'kode' => '6309',
                'nama' => 'KAB. TABALONG',
                'kode_provinsi' => '63',
            ),
            351 =>
            array(
                'kode' => '6310',
                'nama' => 'KAB. TANAH BUMBU',
                'kode_provinsi' => '63',
            ),
            352 =>
            array(
                'kode' => '6311',
                'nama' => 'KAB. BALANGAN',
                'kode_provinsi' => '63',
            ),
            353 =>
            array(
                'kode' => '6371',
                'nama' => 'KOTA BANJARMASIN',
                'kode_provinsi' => '63',
            ),
            354 =>
            array(
                'kode' => '6372',
                'nama' => 'KOTA BANJARBARU',
                'kode_provinsi' => '63',
            ),
            355 =>
            array(
                'kode' => '6401',
                'nama' => 'KAB. PASER',
                'kode_provinsi' => '64',
            ),
            356 =>
            array(
                'kode' => '6402',
                'nama' => 'KAB. KUTAI KARTANEGARA',
                'kode_provinsi' => '64',
            ),
            357 =>
            array(
                'kode' => '6403',
                'nama' => 'KAB. BERAU',
                'kode_provinsi' => '64',
            ),
            358 =>
            array(
                'kode' => '6407',
                'nama' => 'KAB. KUTAI BARAT',
                'kode_provinsi' => '64',
            ),
            359 =>
            array(
                'kode' => '6408',
                'nama' => 'KAB. KUTAI TIMUR',
                'kode_provinsi' => '64',
            ),
            360 =>
            array(
                'kode' => '6409',
                'nama' => 'KAB. PENAJAM PASER UTARA',
                'kode_provinsi' => '64',
            ),
            361 =>
            array(
                'kode' => '6411',
                'nama' => 'KAB. MAHAKAM ULU',
                'kode_provinsi' => '64',
            ),
            362 =>
            array(
                'kode' => '6471',
                'nama' => 'KOTA BALIKPAPAN',
                'kode_provinsi' => '64',
            ),
            363 =>
            array(
                'kode' => '6472',
                'nama' => 'KOTA SAMARINDA',
                'kode_provinsi' => '64',
            ),
            364 =>
            array(
                'kode' => '6474',
                'nama' => 'KOTA BONTANG',
                'kode_provinsi' => '64',
            ),
            365 =>
            array(
                'kode' => '6501',
                'nama' => 'KAB. BULUNGAN',
                'kode_provinsi' => '65',
            ),
            366 =>
            array(
                'kode' => '6502',
                'nama' => 'KAB. MALINAU',
                'kode_provinsi' => '65',
            ),
            367 =>
            array(
                'kode' => '6503',
                'nama' => 'KAB. NUNUKAN',
                'kode_provinsi' => '65',
            ),
            368 =>
            array(
                'kode' => '6504',
                'nama' => 'KAB. TANA TIDUNG',
                'kode_provinsi' => '65',
            ),
            369 =>
            array(
                'kode' => '6571',
                'nama' => 'KOTA TARAKAN',
                'kode_provinsi' => '65',
            ),
            370 =>
            array(
                'kode' => '7101',
                'nama' => 'KAB. BOLAANG MONGONDOW',
                'kode_provinsi' => '71',
            ),
            371 =>
            array(
                'kode' => '7102',
                'nama' => 'KAB. MINAHASA',
                'kode_provinsi' => '71',
            ),
            372 =>
            array(
                'kode' => '7103',
                'nama' => 'KAB. KEPULAUAN SANGIHE',
                'kode_provinsi' => '71',
            ),
            373 =>
            array(
                'kode' => '7104',
                'nama' => 'KAB. KEPULAUAN TALAUD',
                'kode_provinsi' => '71',
            ),
            374 =>
            array(
                'kode' => '7105',
                'nama' => 'KAB. MINAHASA SELATAN',
                'kode_provinsi' => '71',
            ),
            375 =>
            array(
                'kode' => '7106',
                'nama' => 'KAB. MINAHASA UTARA',
                'kode_provinsi' => '71',
            ),
            376 =>
            array(
                'kode' => '7107',
                'nama' => 'KAB. MINAHASA TENGGARA',
                'kode_provinsi' => '71',
            ),
            377 =>
            array(
                'kode' => '7108',
                'nama' => 'KAB. BOLAANG MONGONDOW UTARA',
                'kode_provinsi' => '71',
            ),
            378 =>
            array(
                'kode' => '7109',
                'nama' => 'KAB. KEP. SIAU TAGULANDANG BIARO',
                'kode_provinsi' => '71',
            ),
            379 =>
            array(
                'kode' => '7110',
                'nama' => 'KAB. BOLAANG MONGONDOW TIMUR',
                'kode_provinsi' => '71',
            ),
            380 =>
            array(
                'kode' => '7111',
                'nama' => 'KAB. BOLAANG MONGONDOW SELATAN',
                'kode_provinsi' => '71',
            ),
            381 =>
            array(
                'kode' => '7171',
                'nama' => 'KOTA MANADO',
                'kode_provinsi' => '71',
            ),
            382 =>
            array(
                'kode' => '7172',
                'nama' => 'KOTA BITUNG',
                'kode_provinsi' => '71',
            ),
            383 =>
            array(
                'kode' => '7173',
                'nama' => 'KOTA TOMOHON',
                'kode_provinsi' => '71',
            ),
            384 =>
            array(
                'kode' => '7174',
                'nama' => 'KOTA KOTAMOBAGU',
                'kode_provinsi' => '71',
            ),
            385 =>
            array(
                'kode' => '7201',
                'nama' => 'KAB. BANGGAI',
                'kode_provinsi' => '72',
            ),
            386 =>
            array(
                'kode' => '7202',
                'nama' => 'KAB. POSO',
                'kode_provinsi' => '72',
            ),
            387 =>
            array(
                'kode' => '7203',
                'nama' => 'KAB. DONGGALA',
                'kode_provinsi' => '72',
            ),
            388 =>
            array(
                'kode' => '7204',
                'nama' => 'KAB. TOLI TOLI',
                'kode_provinsi' => '72',
            ),
            389 =>
            array(
                'kode' => '7205',
                'nama' => 'KAB. BUOL',
                'kode_provinsi' => '72',
            ),
            390 =>
            array(
                'kode' => '7206',
                'nama' => 'KAB. MOROWALI',
                'kode_provinsi' => '72',
            ),
            391 =>
            array(
                'kode' => '7207',
                'nama' => 'KAB. BANGGAI KEPULAUAN',
                'kode_provinsi' => '72',
            ),
            392 =>
            array(
                'kode' => '7208',
                'nama' => 'KAB. PARIGI MOUTONG',
                'kode_provinsi' => '72',
            ),
            393 =>
            array(
                'kode' => '7209',
                'nama' => 'KAB. TOJO UNA UNA',
                'kode_provinsi' => '72',
            ),
            394 =>
            array(
                'kode' => '7210',
                'nama' => 'KAB. SIGI',
                'kode_provinsi' => '72',
            ),
            395 =>
            array(
                'kode' => '7211',
                'nama' => 'KAB. BANGGAI LAUT',
                'kode_provinsi' => '72',
            ),
            396 =>
            array(
                'kode' => '7212',
                'nama' => 'KAB. MOROWALI UTARA',
                'kode_provinsi' => '72',
            ),
            397 =>
            array(
                'kode' => '7271',
                'nama' => 'KOTA PALU',
                'kode_provinsi' => '72',
            ),
            398 =>
            array(
                'kode' => '7301',
                'nama' => 'KAB. KEPULAUAN SELAYAR',
                'kode_provinsi' => '73',
            ),
            399 =>
            array(
                'kode' => '7302',
                'nama' => 'KAB. BULUKUMBA',
                'kode_provinsi' => '73',
            ),
            400 =>
            array(
                'kode' => '7303',
                'nama' => 'KAB. BANTAENG',
                'kode_provinsi' => '73',
            ),
            401 =>
            array(
                'kode' => '7304',
                'nama' => 'KAB. JENEPONTO',
                'kode_provinsi' => '73',
            ),
            402 =>
            array(
                'kode' => '7305',
                'nama' => 'KAB. TAKALAR',
                'kode_provinsi' => '73',
            ),
            403 =>
            array(
                'kode' => '7306',
                'nama' => 'KAB. GOWA',
                'kode_provinsi' => '73',
            ),
            404 =>
            array(
                'kode' => '7307',
                'nama' => 'KAB. SINJAI',
                'kode_provinsi' => '73',
            ),
            405 =>
            array(
                'kode' => '7308',
                'nama' => 'KAB. BONE',
                'kode_provinsi' => '73',
            ),
            406 =>
            array(
                'kode' => '7309',
                'nama' => 'KAB. MAROS',
                'kode_provinsi' => '73',
            ),
            407 =>
            array(
                'kode' => '7310',
                'nama' => 'KAB. PANGKAJENE KEPULAUAN',
                'kode_provinsi' => '73',
            ),
            408 =>
            array(
                'kode' => '7311',
                'nama' => 'KAB. BARRU',
                'kode_provinsi' => '73',
            ),
            409 =>
            array(
                'kode' => '7312',
                'nama' => 'KAB. SOPPENG',
                'kode_provinsi' => '73',
            ),
            410 =>
            array(
                'kode' => '7313',
                'nama' => 'KAB. WAJO',
                'kode_provinsi' => '73',
            ),
            411 =>
            array(
                'kode' => '7314',
                'nama' => 'KAB. SIDENRENG RAPPANG',
                'kode_provinsi' => '73',
            ),
            412 =>
            array(
                'kode' => '7315',
                'nama' => 'KAB. PINRANG',
                'kode_provinsi' => '73',
            ),
            413 =>
            array(
                'kode' => '7316',
                'nama' => 'KAB. ENREKANG',
                'kode_provinsi' => '73',
            ),
            414 =>
            array(
                'kode' => '7317',
                'nama' => 'KAB. LUWU',
                'kode_provinsi' => '73',
            ),
            415 =>
            array(
                'kode' => '7318',
                'nama' => 'KAB. TANA TORAJA',
                'kode_provinsi' => '73',
            ),
            416 =>
            array(
                'kode' => '7322',
                'nama' => 'KAB. LUWU UTARA',
                'kode_provinsi' => '73',
            ),
            417 =>
            array(
                'kode' => '7324',
                'nama' => 'KAB. LUWU TIMUR',
                'kode_provinsi' => '73',
            ),
            418 =>
            array(
                'kode' => '7326',
                'nama' => 'KAB. TORAJA UTARA',
                'kode_provinsi' => '73',
            ),
            419 =>
            array(
                'kode' => '7371',
                'nama' => 'KOTA MAKASSAR',
                'kode_provinsi' => '73',
            ),
            420 =>
            array(
                'kode' => '7372',
                'nama' => 'KOTA PARE PARE',
                'kode_provinsi' => '73',
            ),
            421 =>
            array(
                'kode' => '7373',
                'nama' => 'KOTA PALOPO',
                'kode_provinsi' => '73',
            ),
            422 =>
            array(
                'kode' => '7401',
                'nama' => 'KAB. KOLAKA',
                'kode_provinsi' => '74',
            ),
            423 =>
            array(
                'kode' => '7402',
                'nama' => 'KAB. KONAWE',
                'kode_provinsi' => '74',
            ),
            424 =>
            array(
                'kode' => '7403',
                'nama' => 'KAB. MUNA',
                'kode_provinsi' => '74',
            ),
            425 =>
            array(
                'kode' => '7404',
                'nama' => 'KAB. BUTON',
                'kode_provinsi' => '74',
            ),
            426 =>
            array(
                'kode' => '7405',
                'nama' => 'KAB. KONAWE SELATAN',
                'kode_provinsi' => '74',
            ),
            427 =>
            array(
                'kode' => '7406',
                'nama' => 'KAB. BOMBANA',
                'kode_provinsi' => '74',
            ),
            428 =>
            array(
                'kode' => '7407',
                'nama' => 'KAB. WAKATOBI',
                'kode_provinsi' => '74',
            ),
            429 =>
            array(
                'kode' => '7408',
                'nama' => 'KAB. KOLAKA UTARA',
                'kode_provinsi' => '74',
            ),
            430 =>
            array(
                'kode' => '7409',
                'nama' => 'KAB. KONAWE UTARA',
                'kode_provinsi' => '74',
            ),
            431 =>
            array(
                'kode' => '7410',
                'nama' => 'KAB. BUTON UTARA',
                'kode_provinsi' => '74',
            ),
            432 =>
            array(
                'kode' => '7411',
                'nama' => 'KAB. KOLAKA TIMUR',
                'kode_provinsi' => '74',
            ),
            433 =>
            array(
                'kode' => '7412',
                'nama' => 'KAB. KONAWE KEPULAUAN',
                'kode_provinsi' => '74',
            ),
            434 =>
            array(
                'kode' => '7413',
                'nama' => 'KAB. MUNA BARAT',
                'kode_provinsi' => '74',
            ),
            435 =>
            array(
                'kode' => '7414',
                'nama' => 'KAB. BUTON TENGAH',
                'kode_provinsi' => '74',
            ),
            436 =>
            array(
                'kode' => '7415',
                'nama' => 'KAB. BUTON SELATAN',
                'kode_provinsi' => '74',
            ),
            437 =>
            array(
                'kode' => '7471',
                'nama' => 'KOTA KENDARI',
                'kode_provinsi' => '74',
            ),
            438 =>
            array(
                'kode' => '7472',
                'nama' => 'KOTA BAU BAU',
                'kode_provinsi' => '74',
            ),
            439 =>
            array(
                'kode' => '7501',
                'nama' => 'KAB. GORONTALO',
                'kode_provinsi' => '75',
            ),
            440 =>
            array(
                'kode' => '7502',
                'nama' => 'KAB. BOALEMO',
                'kode_provinsi' => '75',
            ),
            441 =>
            array(
                'kode' => '7503',
                'nama' => 'KAB. BONE BOLANGO',
                'kode_provinsi' => '75',
            ),
            442 =>
            array(
                'kode' => '7504',
                'nama' => 'KAB. PAHUWATO',
                'kode_provinsi' => '75',
            ),
            443 =>
            array(
                'kode' => '7505',
                'nama' => 'KAB. GORONTALO UTARA',
                'kode_provinsi' => '75',
            ),
            444 =>
            array(
                'kode' => '7571',
                'nama' => 'KOTA GORONTALO',
                'kode_provinsi' => '75',
            ),
            445 =>
            array(
                'kode' => '7601',
                'nama' => 'KAB. PASANGKAYU',
                'kode_provinsi' => '76',
            ),
            446 =>
            array(
                'kode' => '7602',
                'nama' => 'KAB. MAMUJU',
                'kode_provinsi' => '76',
            ),
            447 =>
            array(
                'kode' => '7603',
                'nama' => 'KAB. MAMASA',
                'kode_provinsi' => '76',
            ),
            448 =>
            array(
                'kode' => '7604',
                'nama' => 'KAB. POLEWALI MANDAR',
                'kode_provinsi' => '76',
            ),
            449 =>
            array(
                'kode' => '7605',
                'nama' => 'KAB. MAJENE',
                'kode_provinsi' => '76',
            ),
            450 =>
            array(
                'kode' => '7606',
                'nama' => 'KAB. MAMUJU TENGAH',
                'kode_provinsi' => '76',
            ),
            451 =>
            array(
                'kode' => '8101',
                'nama' => 'KAB. MALUKU TENGAH',
                'kode_provinsi' => '81',
            ),
            452 =>
            array(
                'kode' => '8102',
                'nama' => 'KAB. MALUKU TENGGARA',
                'kode_provinsi' => '81',
            ),
            453 =>
            array(
                'kode' => '8103',
                'nama' => 'KAB. KEPULAUAN TANIMBAR',
                'kode_provinsi' => '81',
            ),
            454 =>
            array(
                'kode' => '8104',
                'nama' => 'KAB. BURU',
                'kode_provinsi' => '81',
            ),
            455 =>
            array(
                'kode' => '8105',
                'nama' => 'KAB. SERAM BAGIAN TIMUR',
                'kode_provinsi' => '81',
            ),
            456 =>
            array(
                'kode' => '8106',
                'nama' => 'KAB. SERAM BAGIAN BARAT',
                'kode_provinsi' => '81',
            ),
            457 =>
            array(
                'kode' => '8107',
                'nama' => 'KAB. KEPULAUAN ARU',
                'kode_provinsi' => '81',
            ),
            458 =>
            array(
                'kode' => '8108',
                'nama' => 'KAB. MALUKU BARAT DAYA',
                'kode_provinsi' => '81',
            ),
            459 =>
            array(
                'kode' => '8109',
                'nama' => 'KAB. BURU SELATAN',
                'kode_provinsi' => '81',
            ),
            460 =>
            array(
                'kode' => '8171',
                'nama' => 'KOTA AMBON',
                'kode_provinsi' => '81',
            ),
            461 =>
            array(
                'kode' => '8172',
                'nama' => 'KOTA TUAL',
                'kode_provinsi' => '81',
            ),
            462 =>
            array(
                'kode' => '8201',
                'nama' => 'KAB. HALMAHERA BARAT',
                'kode_provinsi' => '82',
            ),
            463 =>
            array(
                'kode' => '8202',
                'nama' => 'KAB. HALMAHERA TENGAH',
                'kode_provinsi' => '82',
            ),
            464 =>
            array(
                'kode' => '8203',
                'nama' => 'KAB. HALMAHERA UTARA',
                'kode_provinsi' => '82',
            ),
            465 =>
            array(
                'kode' => '8204',
                'nama' => 'KAB. HALMAHERA SELATAN',
                'kode_provinsi' => '82',
            ),
            466 =>
            array(
                'kode' => '8205',
                'nama' => 'KAB. KEPULAUAN SULA',
                'kode_provinsi' => '82',
            ),
            467 =>
            array(
                'kode' => '8206',
                'nama' => 'KAB. HALMAHERA TIMUR',
                'kode_provinsi' => '82',
            ),
            468 =>
            array(
                'kode' => '8207',
                'nama' => 'KAB. PULAU MOROTAI',
                'kode_provinsi' => '82',
            ),
            469 =>
            array(
                'kode' => '8208',
                'nama' => 'KAB. PULAU TALIABU',
                'kode_provinsi' => '82',
            ),
            470 =>
            array(
                'kode' => '8271',
                'nama' => 'KOTA TERNATE',
                'kode_provinsi' => '82',
            ),
            471 =>
            array(
                'kode' => '8272',
                'nama' => 'KOTA TIDORE KEPULAUAN',
                'kode_provinsi' => '82',
            ),
            472 =>
            array(
                'kode' => '9101',
                'nama' => 'KAB. MERAUKE',
                'kode_provinsi' => '91',
            ),
            473 =>
            array(
                'kode' => '9102',
                'nama' => 'KAB. JAYAWIJAYA',
                'kode_provinsi' => '91',
            ),
            474 =>
            array(
                'kode' => '9103',
                'nama' => 'KAB. JAYAPURA',
                'kode_provinsi' => '91',
            ),
            475 =>
            array(
                'kode' => '9104',
                'nama' => 'KAB. NABIRE',
                'kode_provinsi' => '91',
            ),
            476 =>
            array(
                'kode' => '9105',
                'nama' => 'KAB. KEPULAUAN YAPEN',
                'kode_provinsi' => '91',
            ),
            477 =>
            array(
                'kode' => '9106',
                'nama' => 'KAB. BIAK NUMFOR',
                'kode_provinsi' => '91',
            ),
            478 =>
            array(
                'kode' => '9107',
                'nama' => 'KAB. PUNCAK JAYA',
                'kode_provinsi' => '91',
            ),
            479 =>
            array(
                'kode' => '9108',
                'nama' => 'KAB. PANIAI',
                'kode_provinsi' => '91',
            ),
            480 =>
            array(
                'kode' => '9109',
                'nama' => 'KAB. MIMIKA',
                'kode_provinsi' => '91',
            ),
            481 =>
            array(
                'kode' => '9110',
                'nama' => 'KAB. SARMI',
                'kode_provinsi' => '91',
            ),
            482 =>
            array(
                'kode' => '9111',
                'nama' => 'KAB. KEEROM',
                'kode_provinsi' => '91',
            ),
            483 =>
            array(
                'kode' => '9112',
                'nama' => 'KAB. PEGUNUNGAN BINTANG',
                'kode_provinsi' => '91',
            ),
            484 =>
            array(
                'kode' => '9113',
                'nama' => 'KAB. YAHUKIMO',
                'kode_provinsi' => '91',
            ),
            485 =>
            array(
                'kode' => '9114',
                'nama' => 'KAB. TOLIKARA',
                'kode_provinsi' => '91',
            ),
            486 =>
            array(
                'kode' => '9115',
                'nama' => 'KAB. WAROPEN',
                'kode_provinsi' => '91',
            ),
            487 =>
            array(
                'kode' => '9116',
                'nama' => 'KAB. BOVEN DIGOEL',
                'kode_provinsi' => '91',
            ),
            488 =>
            array(
                'kode' => '9117',
                'nama' => 'KAB. MAPPI',
                'kode_provinsi' => '91',
            ),
            489 =>
            array(
                'kode' => '9118',
                'nama' => 'KAB. ASMAT',
                'kode_provinsi' => '91',
            ),
            490 =>
            array(
                'kode' => '9119',
                'nama' => 'KAB. SUPIORI',
                'kode_provinsi' => '91',
            ),
            491 =>
            array(
                'kode' => '9120',
                'nama' => 'KAB. MAMBERAMO RAYA',
                'kode_provinsi' => '91',
            ),
            492 =>
            array(
                'kode' => '9121',
                'nama' => 'KAB. MAMBERAMO TENGAH',
                'kode_provinsi' => '91',
            ),
            493 =>
            array(
                'kode' => '9122',
                'nama' => 'KAB. YALIMO',
                'kode_provinsi' => '91',
            ),
            494 =>
            array(
                'kode' => '9123',
                'nama' => 'KAB. LANNY JAYA',
                'kode_provinsi' => '91',
            ),
            495 =>
            array(
                'kode' => '9124',
                'nama' => 'KAB. NDUGA',
                'kode_provinsi' => '91',
            ),
            496 =>
            array(
                'kode' => '9125',
                'nama' => 'KAB. PUNCAK',
                'kode_provinsi' => '91',
            ),
            497 =>
            array(
                'kode' => '9126',
                'nama' => 'KAB. DOGIYAI',
                'kode_provinsi' => '91',
            ),
            498 =>
            array(
                'kode' => '9127',
                'nama' => 'KAB. INTAN JAYA',
                'kode_provinsi' => '91',
            ),
            499 =>
            array(
                'kode' => '9128',
                'nama' => 'KAB. DEIYAI',
                'kode_provinsi' => '91',
            ),
        ));

        DB::table('kabupatens')->insert(array(
            0 =>
            array(
                'kode' => '9171',
                'nama' => 'KOTA JAYAPURA',
                'kode_provinsi' => '91',
            ),
            1 =>
            array(
                'kode' => '9201',
                'nama' => 'KAB. SORONG',
                'kode_provinsi' => '92',
            ),
            2 =>
            array(
                'kode' => '9202',
                'nama' => 'KAB. MANOKWARI',
                'kode_provinsi' => '92',
            ),
            3 =>
            array(
                'kode' => '9203',
                'nama' => 'KAB. FAK FAK',
                'kode_provinsi' => '92',
            ),
            4 =>
            array(
                'kode' => '9204',
                'nama' => 'KAB. SORONG SELATAN',
                'kode_provinsi' => '92',
            ),
            5 =>
            array(
                'kode' => '9205',
                'nama' => 'KAB. RAJA AMPAT',
                'kode_provinsi' => '92',
            ),
            6 =>
            array(
                'kode' => '9206',
                'nama' => 'KAB. TELUK BINTUNI',
                'kode_provinsi' => '92',
            ),
            7 =>
            array(
                'kode' => '9207',
                'nama' => 'KAB. TELUK WONDAMA',
                'kode_provinsi' => '92',
            ),
            8 =>
            array(
                'kode' => '9208',
                'nama' => 'KAB. KAIMANA',
                'kode_provinsi' => '92',
            ),
            9 =>
            array(
                'kode' => '9209',
                'nama' => 'KAB. TAMBRAUW',
                'kode_provinsi' => '92',
            ),
            10 =>
            array(
                'kode' => '9210',
                'nama' => 'KAB. MAYBRAT',
                'kode_provinsi' => '92',
            ),
            11 =>
            array(
                'kode' => '9211',
                'nama' => 'KAB. MANOKWARI SELATAN',
                'kode_provinsi' => '92',
            ),
            12 =>
            array(
                'kode' => '9212',
                'nama' => 'KAB. PEGUNUNGAN ARFAK',
                'kode_provinsi' => '92',
            ),
            13 =>
            array(
                'kode' => '9271',
                'nama' => 'KOTA SORONG',
                'kode_provinsi' => '92',
            ),
        ));
    }
}
