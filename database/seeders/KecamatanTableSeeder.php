<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KecamatanTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('kecamatan')->delete();
        
        DB::table('kecamatan')->insert(array (
            0 => 
            array (
                'id_kecamatan' => '1101',
                'id_kabupaten' => '110118',
                'nama_kecamatan' => 'Trumon Tengah',
            ),
            1 => 
            array (
                'id_kecamatan' => '1102',
                'id_kabupaten' => '110216',
                'nama_kecamatan' => 'Leuser',
            ),
            2 => 
            array (
                'id_kecamatan' => '1103',
                'id_kabupaten' => '110324',
                'nama_kecamatan' => 'Peunaron',
            ),
            3 => 
            array (
                'id_kecamatan' => '1104',
                'id_kabupaten' => '110421',
                'nama_kecamatan' => 'Rusip Antara',
            ),
            4 => 
            array (
                'id_kecamatan' => '1105',
                'id_kabupaten' => '110512',
                'nama_kecamatan' => 'Panton Reu',
            ),
            5 => 
            array (
                'id_kecamatan' => '1106',
                'id_kabupaten' => '110623',
                'nama_kecamatan' => 'Blang Bintang',
            ),
            6 => 
            array (
                'id_kecamatan' => '1107',
                'id_kabupaten' => '110731',
                'nama_kecamatan' => 'Titeue',
            ),
            7 => 
            array (
                'id_kecamatan' => '1108',
                'id_kabupaten' => '110827',
                'nama_kecamatan' => 'Nisam Antara',
            ),
            8 => 
            array (
                'id_kecamatan' => '1109',
                'id_kabupaten' => '110910',
                'nama_kecamatan' => 'Simeulue Cut',
            ),
            9 => 
            array (
                'id_kecamatan' => '1110',
                'id_kabupaten' => '111016',
                'nama_kecamatan' => 'Pulau Banyak Barat',
            ),
            10 => 
            array (
                'id_kecamatan' => '1111',
                'id_kabupaten' => '111201',
                'nama_kecamatan' => 'Blangpidie',
            ),
            11 => 
            array (
                'id_kecamatan' => '1112',
                'id_kabupaten' => '111209',
                'nama_kecamatan' => 'Lembah Sabil',
            ),
            12 => 
            array (
                'id_kecamatan' => '1113',
                'id_kabupaten' => '111311',
                'nama_kecamatan' => 'Pantan Cuaca',
            ),
            13 => 
            array (
                'id_kecamatan' => '1114',
                'id_kabupaten' => '111409',
                'nama_kecamatan' => 'Pasie Raya',
            ),
            14 => 
            array (
                'id_kecamatan' => '1115',
                'id_kabupaten' => '111510',
                'nama_kecamatan' => 'Beutong Ateuh Banggalang',
            ),
            15 => 
            array (
                'id_kecamatan' => '1116',
                'id_kabupaten' => '111612',
                'nama_kecamatan' => 'Sekerak',
            ),
            16 => 
            array (
                'id_kecamatan' => '1117',
                'id_kabupaten' => '111710',
                'nama_kecamatan' => 'Gajah Putih',
            ),
            17 => 
            array (
                'id_kecamatan' => '1118',
                'id_kabupaten' => '111808',
                'nama_kecamatan' => 'Trienggadeng',
            ),
            18 => 
            array (
                'id_kecamatan' => '1171',
                'id_kabupaten' => '117109',
                'nama_kecamatan' => 'Ulee Kareng',
            ),
            19 => 
            array (
                'id_kecamatan' => '1172',
                'id_kabupaten' => '117304',
                'nama_kecamatan' => 'Muara Satu',
            ),
            20 => 
            array (
                'id_kecamatan' => '1174',
                'id_kabupaten' => '117405',
                'nama_kecamatan' => 'Langsa Baro',
            ),
            21 => 
            array (
                'id_kecamatan' => '1175',
                'id_kabupaten' => '117505',
                'nama_kecamatan' => 'Longkib',
            ),
            22 => 
            array (
                'id_kecamatan' => '1201',
                'id_kabupaten' => '120120',
                'nama_kecamatan' => 'Sarudik',
            ),
            23 => 
            array (
                'id_kecamatan' => '1202',
                'id_kabupaten' => '120215',
                'nama_kecamatan' => 'Muara',
            ),
            24 => 
            array (
                'id_kecamatan' => '1203',
                'id_kabupaten' => '120332',
                'nama_kecamatan' => 'Angkola Muara Tais',
            ),
            25 => 
            array (
                'id_kecamatan' => '1204',
                'id_kabupaten' => '120435',
                'nama_kecamatan' => 'Sogae\'adu',
            ),
            26 => 
            array (
                'id_kecamatan' => '1205',
                'id_kabupaten' => '120523',
                'nama_kecamatan' => 'Pematang Jaya',
            ),
            27 => 
            array (
                'id_kecamatan' => '1206',
                'id_kabupaten' => '120617',
                'nama_kecamatan' => 'Tiganderket',
            ),
            28 => 
            array (
                'id_kecamatan' => '1207',
                'id_kabupaten' => '120733',
                'nama_kecamatan' => 'Beringin',
            ),
            29 => 
            array (
                'id_kecamatan' => '1208',
                'id_kabupaten' => '120832',
                'nama_kecamatan' => 'Dolog Masagal',
            ),
            30 => 
            array (
                'id_kecamatan' => '1209',
                'id_kabupaten' => '120932',
                'nama_kecamatan' => 'Aek Ledong',
            ),
            31 => 
            array (
                'id_kecamatan' => '1210',
                'id_kabupaten' => '121020',
                'nama_kecamatan' => 'Panai Hulu',
            ),
            32 => 
            array (
                'id_kecamatan' => '1211',
                'id_kabupaten' => '121115',
                'nama_kecamatan' => 'Sitinjo',
            ),
            33 => 
            array (
                'id_kecamatan' => '1212',
                'id_kabupaten' => '121301',
                'nama_kecamatan' => 'Panyabungan',
            ),
            34 => 
            array (
                'id_kecamatan' => '1213',
                'id_kabupaten' => '121323',
                'nama_kecamatan' => 'Naga Juang',
            ),
            35 => 
            array (
                'id_kecamatan' => '1214',
                'id_kabupaten' => '121435',
                'nama_kecamatan' => 'Idanotae',
            ),
            36 => 
            array (
                'id_kecamatan' => '1215',
                'id_kabupaten' => '121508',
                'nama_kecamatan' => 'Siempat Rube',
            ),
            37 => 
            array (
                'id_kecamatan' => '1216',
                'id_kabupaten' => '121610',
                'nama_kecamatan' => 'Tarabintang',
            ),
            38 => 
            array (
                'id_kecamatan' => '1217',
                'id_kabupaten' => '121709',
                'nama_kecamatan' => 'Sitio-tio',
            ),
            39 => 
            array (
                'id_kecamatan' => '1218',
                'id_kabupaten' => '121817',
                'nama_kecamatan' => 'Bintang Bayu',
            ),
            40 => 
            array (
                'id_kecamatan' => '1219',
                'id_kabupaten' => '121912',
                'nama_kecamatan' => 'Nibung Hangus',
            ),
            41 => 
            array (
                'id_kecamatan' => '1220',
                'id_kabupaten' => '122012',
                'nama_kecamatan' => 'Ujung Batu',
            ),
            42 => 
            array (
                'id_kecamatan' => '1221',
                'id_kabupaten' => '122117',
                'nama_kecamatan' => 'Sosa Timur',
            ),
            43 => 
            array (
                'id_kecamatan' => '1222',
                'id_kabupaten' => '122205',
                'nama_kecamatan' => 'Silangkitang',
            ),
            44 => 
            array (
                'id_kecamatan' => '1223',
                'id_kabupaten' => '122308',
                'nama_kecamatan' => 'Kualuh Selatan',
            ),
            45 => 
            array (
                'id_kecamatan' => '1224',
                'id_kabupaten' => '122411',
                'nama_kecamatan' => 'Lahewa Timur',
            ),
            46 => 
            array (
                'id_kecamatan' => '1225',
                'id_kabupaten' => '122508',
                'nama_kecamatan' => 'Ulu Moro\'o',
            ),
            47 => 
            array (
                'id_kecamatan' => '1271',
                'id_kabupaten' => '127121',
                'nama_kecamatan' => 'Medan Selayang',
            ),
            48 => 
            array (
                'id_kecamatan' => '1272',
                'id_kabupaten' => '127208',
                'nama_kecamatan' => 'Siantar Marimbun',
            ),
            49 => 
            array (
                'id_kecamatan' => '1273',
                'id_kabupaten' => '127304',
                'nama_kecamatan' => 'Sibolga Sambas',
            ),
            50 => 
            array (
                'id_kecamatan' => '1274',
                'id_kabupaten' => '127406',
                'nama_kecamatan' => 'Datuk Bandar Timur',
            ),
            51 => 
            array (
                'id_kecamatan' => '1275',
                'id_kabupaten' => '127505',
                'nama_kecamatan' => 'Binjai Selatan',
            ),
            52 => 
            array (
                'id_kecamatan' => '1276',
                'id_kabupaten' => '127605',
                'nama_kecamatan' => 'Tebing Tinggi Kota',
            ),
            53 => 
            array (
                'id_kecamatan' => '1277',
                'id_kabupaten' => '127706',
                'nama_kecamatan' => 'Padangsidimpuan Angkola Julu',
            ),
            54 => 
            array (
                'id_kecamatan' => '1278',
                'id_kabupaten' => '127806',
                'nama_kecamatan' => 'Gunungsitoli Barat',
            ),
            55 => 
            array (
                'id_kecamatan' => '1301',
                'id_kabupaten' => '130115',
                'nama_kecamatan' => 'Silaut',
            ),
            56 => 
            array (
                'id_kecamatan' => '1302',
                'id_kabupaten' => '130219',
                'nama_kecamatan' => 'Danau Kembar',
            ),
            57 => 
            array (
                'id_kecamatan' => '1303',
                'id_kabupaten' => '130310',
                'nama_kecamatan' => 'Kupitan',
            ),
            58 => 
            array (
                'id_kecamatan' => '1304',
                'id_kabupaten' => '130414',
                'nama_kecamatan' => 'Batipuah Selatan',
            ),
            59 => 
            array (
                'id_kecamatan' => '1305',
                'id_kabupaten' => '130517',
                'nama_kecamatan' => 'Anam Lingkuang',
            ),
            60 => 
            array (
                'id_kecamatan' => '1306',
                'id_kabupaten' => '130616',
                'nama_kecamatan' => 'Malalak',
            ),
            61 => 
            array (
                'id_kecamatan' => '1307',
                'id_kabupaten' => '130713',
                'nama_kecamatan' => 'Akabiluru',
            ),
            62 => 
            array (
                'id_kecamatan' => '1308',
                'id_kabupaten' => '130819',
                'nama_kecamatan' => 'Rao Selatan',
            ),
            63 => 
            array (
                'id_kecamatan' => '1309',
                'id_kabupaten' => '130910',
                'nama_kecamatan' => 'Pagai Selatan',
            ),
            64 => 
            array (
                'id_kecamatan' => '1310',
                'id_kabupaten' => '131011',
                'nama_kecamatan' => 'Koto Besar',
            ),
            65 => 
            array (
                'id_kecamatan' => '1311',
                'id_kabupaten' => '131107',
                'nama_kecamatan' => 'Sangir Balai Janggo',
            ),
            66 => 
            array (
                'id_kecamatan' => '1312',
                'id_kabupaten' => '131211',
                'nama_kecamatan' => 'Sasak Ranah Pasisie',
            ),
            67 => 
            array (
                'id_kecamatan' => '1371',
                'id_kabupaten' => '137111',
                'nama_kecamatan' => 'Koto Tangah',
            ),
            68 => 
            array (
                'id_kecamatan' => '1372',
                'id_kabupaten' => '137301',
                'nama_kecamatan' => 'Lembah Segar',
            ),
            69 => 
            array (
                'id_kecamatan' => '1373',
                'id_kabupaten' => '137304',
                'nama_kecamatan' => 'Talawi',
            ),
            70 => 
            array (
                'id_kecamatan' => '1374',
                'id_kabupaten' => '137402',
                'nama_kecamatan' => 'Padang Panjang Barat',
            ),
            71 => 
            array (
                'id_kecamatan' => '1375',
                'id_kabupaten' => '137503',
                'nama_kecamatan' => 'Aur Birugo Tigo Baleh',
            ),
            72 => 
            array (
                'id_kecamatan' => '1376',
                'id_kabupaten' => '137605',
                'nama_kecamatan' => 'Payakumbuh Selatan',
            ),
            73 => 
            array (
                'id_kecamatan' => '1377',
                'id_kabupaten' => '137704',
                'nama_kecamatan' => 'Pariaman Timur',
            ),
            74 => 
            array (
                'id_kecamatan' => '1401',
                'id_kabupaten' => '140121',
                'nama_kecamatan' => 'Koto Kampar Hulu',
            ),
            75 => 
            array (
                'id_kecamatan' => '1402',
                'id_kabupaten' => '140214',
                'nama_kecamatan' => 'Batang Peranap',
            ),
            76 => 
            array (
                'id_kecamatan' => '1403',
                'id_kabupaten' => '140316',
                'nama_kecamatan' => 'Bathin Solapan',
            ),
            77 => 
            array (
                'id_kecamatan' => '1404',
                'id_kabupaten' => '140420',
                'nama_kecamatan' => 'Sungai Batang',
            ),
            78 => 
            array (
                'id_kecamatan' => '1405',
                'id_kabupaten' => '140512',
                'nama_kecamatan' => 'Bandar Petalangan',
            ),
            79 => 
            array (
                'id_kecamatan' => '1406',
                'id_kabupaten' => '140616',
                'nama_kecamatan' => 'Pendalian IV Koto',
            ),
            80 => 
            array (
                'id_kecamatan' => '1407',
                'id_kabupaten' => '140718',
                'nama_kecamatan' => 'Balai Jaya',
            ),
            81 => 
            array (
                'id_kecamatan' => '1408',
                'id_kabupaten' => '140814',
                'nama_kecamatan' => 'Pusako',
            ),
            82 => 
            array (
                'id_kecamatan' => '1409',
                'id_kabupaten' => '140915',
                'nama_kecamatan' => 'Pucuk Rantau',
            ),
            83 => 
            array (
                'id_kecamatan' => '1410',
                'id_kabupaten' => '141009',
                'nama_kecamatan' => 'Rangsang Pesisir',
            ),
            84 => 
            array (
                'id_kecamatan' => '1471',
                'id_kabupaten' => '147115',
                'nama_kecamatan' => 'Rumbai Timur',
            ),
            85 => 
            array (
                'id_kecamatan' => '1472',
                'id_kabupaten' => '147207',
                'nama_kecamatan' => 'Dumai Selatan',
            ),
            86 => 
            array (
                'id_kecamatan' => '1501',
                'id_kabupaten' => '150123',
                'nama_kecamatan' => 'Danau Kerinci Barat',
            ),
            87 => 
            array (
                'id_kecamatan' => '1502',
                'id_kabupaten' => '150224',
                'nama_kecamatan' => 'Tiang Pumpung',
            ),
            88 => 
            array (
                'id_kecamatan' => '1503',
                'id_kabupaten' => '150311',
                'nama_kecamatan' => 'Mandiangin Timur',
            ),
            89 => 
            array (
                'id_kecamatan' => '1504',
                'id_kabupaten' => '150408',
                'nama_kecamatan' => 'Maro Sebo Ilir',
            ),
            90 => 
            array (
                'id_kecamatan' => '1505',
                'id_kabupaten' => '150511',
                'nama_kecamatan' => 'Taman Rajo',
            ),
            91 => 
            array (
                'id_kecamatan' => '1506',
                'id_kabupaten' => '150613',
                'nama_kecamatan' => 'Senyerang',
            ),
            92 => 
            array (
                'id_kecamatan' => '1507',
                'id_kabupaten' => '150711',
                'nama_kecamatan' => 'Berbak',
            ),
            93 => 
            array (
                'id_kecamatan' => '1508',
                'id_kabupaten' => '150817',
                'nama_kecamatan' => 'Tanah Sepenggal Lintas',
            ),
            94 => 
            array (
                'id_kecamatan' => '1509',
                'id_kabupaten' => '150912',
                'nama_kecamatan' => 'Muara Tabir',
            ),
            95 => 
            array (
                'id_kecamatan' => '1571',
                'id_kabupaten' => '157111',
                'nama_kecamatan' => 'Paal Merah',
            ),
            96 => 
            array (
                'id_kecamatan' => '1572',
                'id_kabupaten' => '157208',
                'nama_kecamatan' => 'Sungai Bungkal',
            ),
            97 => 
            array (
                'id_kecamatan' => '1601',
                'id_kabupaten' => '160132',
                'nama_kecamatan' => 'Kedaton Peninjauan Raya',
            ),
            98 => 
            array (
                'id_kecamatan' => '1602',
                'id_kabupaten' => '160224',
                'nama_kecamatan' => 'Pedamaran Timur',
            ),
            99 => 
            array (
                'id_kecamatan' => '1603',
                'id_kabupaten' => '160327',
                'nama_kecamatan' => 'Panang Enim',
            ),
            100 => 
            array (
                'id_kecamatan' => '1604',
                'id_kabupaten' => '160431',
                'nama_kecamatan' => 'Lahat Selatan',
            ),
            101 => 
            array (
                'id_kecamatan' => '1605',
                'id_kabupaten' => '160521',
                'nama_kecamatan' => 'Suka Karya',
            ),
            102 => 
            array (
                'id_kecamatan' => '1606',
                'id_kabupaten' => '160615',
                'nama_kecamatan' => 'Jirak Jaya',
            ),
            103 => 
            array (
                'id_kecamatan' => '1607',
                'id_kabupaten' => '160721',
                'nama_kecamatan' => 'Selat Penuguan',
            ),
            104 => 
            array (
                'id_kecamatan' => '1608',
                'id_kabupaten' => '160820',
                'nama_kecamatan' => 'Buay Pemuka Bangsa Raja',
            ),
            105 => 
            array (
                'id_kecamatan' => '1609',
                'id_kabupaten' => '160919',
                'nama_kecamatan' => 'Buay Rawan',
            ),
            106 => 
            array (
                'id_kecamatan' => '1610',
                'id_kabupaten' => '161016',
                'nama_kecamatan' => 'Payaraman',
            ),
            107 => 
            array (
                'id_kecamatan' => '1611',
                'id_kabupaten' => '161110',
                'nama_kecamatan' => 'Pendopo Barat',
            ),
            108 => 
            array (
                'id_kecamatan' => '1612',
                'id_kabupaten' => '161205',
                'nama_kecamatan' => 'Tanah Abang',
            ),
            109 => 
            array (
                'id_kecamatan' => '1613',
                'id_kabupaten' => '161307',
                'nama_kecamatan' => 'Ulu Rawas',
            ),
            110 => 
            array (
                'id_kecamatan' => '1671',
                'id_kabupaten' => '167118',
                'nama_kecamatan' => 'Ilir Timur Tiga',
            ),
            111 => 
            array (
                'id_kecamatan' => '1672',
                'id_kabupaten' => '167205',
                'nama_kecamatan' => 'Dempo Tengah',
            ),
            112 => 
            array (
                'id_kecamatan' => '1673',
                'id_kabupaten' => '167308',
                'nama_kecamatan' => 'Lubuk Linggau Utara II',
            ),
            113 => 
            array (
                'id_kecamatan' => '1674',
                'id_kabupaten' => '167406',
                'nama_kecamatan' => 'Prabumulih Selatan',
            ),
            114 => 
            array (
                'id_kecamatan' => '1701',
                'id_kabupaten' => '170111',
                'nama_kecamatan' => 'Pasar Manna',
            ),
            115 => 
            array (
                'id_kecamatan' => '1702',
                'id_kabupaten' => '170224',
                'nama_kecamatan' => 'Bermani Ulu Raya',
            ),
            116 => 
            array (
                'id_kecamatan' => '1703',
                'id_kabupaten' => '170325',
                'nama_kecamatan' => 'Marga Sakti Sebelat',
            ),
            117 => 
            array (
                'id_kecamatan' => '1704',
                'id_kabupaten' => '170415',
                'nama_kecamatan' => 'Padang Guci Hulu',
            ),
            118 => 
            array (
                'id_kecamatan' => '1705',
                'id_kabupaten' => '170514',
                'nama_kecamatan' => 'Ilir Talo',
            ),
            119 => 
            array (
                'id_kecamatan' => '1706',
                'id_kabupaten' => '170615',
                'nama_kecamatan' => 'Sungai Rumbai',
            ),
            120 => 
            array (
                'id_kecamatan' => '1707',
                'id_kabupaten' => '170712',
                'nama_kecamatan' => 'Pinang Belapis',
            ),
            121 => 
            array (
                'id_kecamatan' => '1708',
                'id_kabupaten' => '170808',
                'nama_kecamatan' => 'Muara Kemumu',
            ),
            122 => 
            array (
                'id_kecamatan' => '1709',
                'id_kabupaten' => '170911',
                'nama_kecamatan' => 'Semidang Lagan',
            ),
            123 => 
            array (
                'id_kecamatan' => '1771',
                'id_kabupaten' => '177109',
                'nama_kecamatan' => 'Singaran Pati',
            ),
            124 => 
            array (
                'id_kecamatan' => '1801',
                'id_kabupaten' => '180124',
                'nama_kecamatan' => 'Way Panji',
            ),
            125 => 
            array (
                'id_kecamatan' => '1802',
                'id_kabupaten' => '180228',
                'nama_kecamatan' => 'Putra Rumbia',
            ),
            126 => 
            array (
                'id_kecamatan' => '1803',
                'id_kabupaten' => '180323',
                'nama_kecamatan' => 'Blambangan Pagar',
            ),
            127 => 
            array (
                'id_kecamatan' => '1804',
                'id_kabupaten' => '180423',
                'nama_kecamatan' => 'Bandar Negeri Suoh',
            ),
            128 => 
            array (
                'id_kecamatan' => '1805',
                'id_kabupaten' => '180530',
                'nama_kecamatan' => 'Menggala Timur',
            ),
            129 => 
            array (
                'id_kecamatan' => '1806',
                'id_kabupaten' => '180628',
                'nama_kecamatan' => 'Kelumbayan Barat',
            ),
            130 => 
            array (
                'id_kecamatan' => '1807',
                'id_kabupaten' => '180724',
                'nama_kecamatan' => 'Marga Sekampung',
            ),
            131 => 
            array (
                'id_kecamatan' => '1808',
                'id_kabupaten' => '180815',
                'nama_kecamatan' => 'Umpu Semenguk',
            ),
            132 => 
            array (
                'id_kecamatan' => '1809',
                'id_kabupaten' => '180911',
                'nama_kecamatan' => 'Way Ratai',
            ),
            133 => 
            array (
                'id_kecamatan' => '1810',
                'id_kabupaten' => '181009',
                'nama_kecamatan' => 'Pagelaran Utara',
            ),
            134 => 
            array (
                'id_kecamatan' => '1811',
                'id_kabupaten' => '181107',
                'nama_kecamatan' => 'Tanjung Raya',
            ),
            135 => 
            array (
                'id_kecamatan' => '1812',
                'id_kabupaten' => '181209',
                'nama_kecamatan' => 'Batu Putih',
            ),
            136 => 
            array (
                'id_kecamatan' => '1813',
                'id_kabupaten' => '181311',
                'nama_kecamatan' => 'Bangkunat',
            ),
            137 => 
            array (
                'id_kecamatan' => '1871',
                'id_kabupaten' => '187120',
                'nama_kecamatan' => 'Bumi Waras',
            ),
            138 => 
            array (
                'id_kecamatan' => '1872',
                'id_kabupaten' => '187205',
                'nama_kecamatan' => 'Metro Selatan',
            ),
            139 => 
            array (
                'id_kecamatan' => '1901',
                'id_kabupaten' => '190108',
                'nama_kecamatan' => 'Puding Besar',
            ),
            140 => 
            array (
                'id_kecamatan' => '1902',
                'id_kabupaten' => '190205',
                'nama_kecamatan' => 'Badau',
            ),
            141 => 
            array (
                'id_kecamatan' => '1903',
                'id_kabupaten' => '190308',
                'nama_kecamatan' => 'Kepulauan Pongok',
            ),
            142 => 
            array (
                'id_kecamatan' => '1904',
                'id_kabupaten' => '190406',
                'nama_kecamatan' => 'Lubuk Besar',
            ),
            143 => 
            array (
                'id_kecamatan' => '1905',
                'id_kabupaten' => '190506',
                'nama_kecamatan' => 'Parittiga',
            ),
            144 => 
            array (
                'id_kecamatan' => '1906',
                'id_kabupaten' => '190607',
                'nama_kecamatan' => 'Simpang Pesak',
            ),
            145 => 
            array (
                'id_kecamatan' => '1971',
                'id_kabupaten' => '197107',
                'nama_kecamatan' => 'Girimaya',
            ),
            146 => 
            array (
                'id_kecamatan' => '2101',
                'id_kabupaten' => '210115',
                'nama_kecamatan' => 'Seri Kuala Lobam',
            ),
            147 => 
            array (
                'id_kecamatan' => '2102',
                'id_kabupaten' => '210214',
                'nama_kecamatan' => 'Sugie Besar',
            ),
            148 => 
            array (
                'id_kecamatan' => '2103',
                'id_kabupaten' => '210324',
                'nama_kecamatan' => 'Pulau Seluan',
            ),
            149 => 
            array (
                'id_kecamatan' => '2104',
                'id_kabupaten' => '210413',
                'nama_kecamatan' => 'Bakung Serumpun',
            ),
            150 => 
            array (
                'id_kecamatan' => '2105',
                'id_kabupaten' => '210510',
                'nama_kecamatan' => 'Kute Siantan',
            ),
            151 => 
            array (
                'id_kecamatan' => '2171',
                'id_kabupaten' => '217112',
                'nama_kecamatan' => 'Batu Aji',
            ),
            152 => 
            array (
                'id_kecamatan' => '2172',
                'id_kabupaten' => '217204',
                'nama_kecamatan' => 'Bukit Bestari',
            ),
            153 => 
            array (
                'id_kecamatan' => '3101',
                'id_kabupaten' => '310102',
                'nama_kecamatan' => 'Kepulauan Seribu Selatan',
            ),
            154 => 
            array (
                'id_kecamatan' => '3171',
                'id_kabupaten' => '317108',
                'nama_kecamatan' => 'Johar Baru',
            ),
            155 => 
            array (
                'id_kecamatan' => '3172',
                'id_kabupaten' => '317206',
                'nama_kecamatan' => 'Kelapa Gading',
            ),
            156 => 
            array (
                'id_kecamatan' => '3173',
                'id_kabupaten' => '317308',
                'nama_kecamatan' => 'Kembangan',
            ),
            157 => 
            array (
                'id_kecamatan' => '3174',
                'id_kabupaten' => '317410',
                'nama_kecamatan' => 'Pesanggrahan',
            ),
            158 => 
            array (
                'id_kecamatan' => '3175',
                'id_kabupaten' => '317510',
                'nama_kecamatan' => 'Cipayung',
            ),
            159 => 
            array (
                'id_kecamatan' => '3201',
                'id_kabupaten' => '320140',
                'nama_kecamatan' => 'Tenjolaya',
            ),
            160 => 
            array (
                'id_kecamatan' => '3202',
                'id_kabupaten' => '320247',
                'nama_kecamatan' => 'Ciambar',
            ),
            161 => 
            array (
                'id_kecamatan' => '3203',
                'id_kabupaten' => '320332',
                'nama_kecamatan' => 'Pasirkuda',
            ),
            162 => 
            array (
                'id_kecamatan' => '3204',
                'id_kabupaten' => '320446',
                'nama_kecamatan' => 'Kutawaringin',
            ),
            163 => 
            array (
                'id_kecamatan' => '3205',
                'id_kabupaten' => '320542',
                'nama_kecamatan' => 'Sucinaraja',
            ),
            164 => 
            array (
                'id_kecamatan' => '3206',
                'id_kabupaten' => '320639',
                'nama_kecamatan' => 'Sukaresik',
            ),
            165 => 
            array (
                'id_kecamatan' => '3207',
                'id_kabupaten' => '320737',
                'nama_kecamatan' => 'Banjaranyar',
            ),
            166 => 
            array (
                'id_kecamatan' => '3208',
                'id_kabupaten' => '320832',
                'nama_kecamatan' => 'Cigandamekar',
            ),
            167 => 
            array (
                'id_kecamatan' => '3209',
                'id_kabupaten' => '320940',
                'nama_kecamatan' => 'Jamblang',
            ),
            168 => 
            array (
                'id_kecamatan' => '3210',
                'id_kabupaten' => '321026',
                'nama_kecamatan' => 'Malausma',
            ),
            169 => 
            array (
                'id_kecamatan' => '3211',
                'id_kabupaten' => '321126',
                'nama_kecamatan' => 'Jatigede',
            ),
            170 => 
            array (
                'id_kecamatan' => '3212',
                'id_kabupaten' => '321231',
                'nama_kecamatan' => 'Patrol',
            ),
            171 => 
            array (
                'id_kecamatan' => '3213',
                'id_kabupaten' => '321330',
                'nama_kecamatan' => 'Pusakajaya',
            ),
            172 => 
            array (
                'id_kecamatan' => '3214',
                'id_kabupaten' => '321417',
                'nama_kecamatan' => 'Kiarapedes',
            ),
            173 => 
            array (
                'id_kecamatan' => '3215',
                'id_kabupaten' => '321530',
                'nama_kecamatan' => 'Cilebar',
            ),
            174 => 
            array (
                'id_kecamatan' => '3216',
                'id_kabupaten' => '321623',
                'nama_kecamatan' => 'Bojongmangu',
            ),
            175 => 
            array (
                'id_kecamatan' => '3217',
                'id_kabupaten' => '321716',
                'nama_kecamatan' => 'Saguling',
            ),
            176 => 
            array (
                'id_kecamatan' => '3218',
                'id_kabupaten' => '321810',
                'nama_kecamatan' => 'Sidamulih',
            ),
            177 => 
            array (
                'id_kecamatan' => '3271',
                'id_kabupaten' => '327106',
                'nama_kecamatan' => 'Tanah Sareal',
            ),
            178 => 
            array (
                'id_kecamatan' => '3272',
                'id_kabupaten' => '327207',
                'nama_kecamatan' => 'Cibeureum',
            ),
            179 => 
            array (
                'id_kecamatan' => '3273',
                'id_kabupaten' => '327330',
                'nama_kecamatan' => 'Mandalajati',
            ),
            180 => 
            array (
                'id_kecamatan' => '3274',
                'id_kabupaten' => '327405',
                'nama_kecamatan' => 'Kesambi',
            ),
            181 => 
            array (
                'id_kecamatan' => '3275',
                'id_kabupaten' => '327512',
                'nama_kecamatan' => 'Pondokmelati',
            ),
            182 => 
            array (
                'id_kecamatan' => '3276',
                'id_kabupaten' => '327611',
                'nama_kecamatan' => 'Bojongsari',
            ),
            183 => 
            array (
                'id_kecamatan' => '3277',
                'id_kabupaten' => '327703',
                'nama_kecamatan' => 'Cimahi Utara',
            ),
            184 => 
            array (
                'id_kecamatan' => '3278',
                'id_kabupaten' => '327810',
                'nama_kecamatan' => 'Purbaratu',
            ),
            185 => 
            array (
                'id_kecamatan' => '3279',
                'id_kabupaten' => '327904',
                'nama_kecamatan' => 'Langensari',
            ),
            186 => 
            array (
                'id_kecamatan' => '3301',
                'id_kabupaten' => '330124',
                'nama_kecamatan' => 'Kampung Laut',
            ),
            187 => 
            array (
                'id_kecamatan' => '3302',
                'id_kabupaten' => '330227',
                'nama_kecamatan' => 'Purwokerto Utara',
            ),
            188 => 
            array (
                'id_kecamatan' => '3303',
                'id_kabupaten' => '330318',
                'nama_kecamatan' => 'Kertanegara',
            ),
            189 => 
            array (
                'id_kecamatan' => '3304',
                'id_kabupaten' => '330420',
                'nama_kecamatan' => 'Pagedongan',
            ),
            190 => 
            array (
                'id_kecamatan' => '3305',
                'id_kabupaten' => '330526',
                'nama_kecamatan' => 'Karangsambung',
            ),
            191 => 
            array (
                'id_kecamatan' => '3306',
                'id_kabupaten' => '330616',
                'nama_kecamatan' => 'Bener',
            ),
            192 => 
            array (
                'id_kecamatan' => '3307',
                'id_kabupaten' => '330715',
                'nama_kecamatan' => 'Kalibawang',
            ),
            193 => 
            array (
                'id_kecamatan' => '3308',
                'id_kabupaten' => '330821',
                'nama_kecamatan' => 'Windusari',
            ),
            194 => 
            array (
                'id_kecamatan' => '3309',
                'id_kabupaten' => '330922',
                'nama_kecamatan' => 'Wonosamodro',
            ),
            195 => 
            array (
                'id_kecamatan' => '3310',
                'id_kabupaten' => '331026',
                'nama_kecamatan' => 'Klaten Selatan',
            ),
            196 => 
            array (
                'id_kecamatan' => '3311',
                'id_kabupaten' => '331112',
                'nama_kecamatan' => 'Kartasura',
            ),
            197 => 
            array (
                'id_kecamatan' => '3312',
                'id_kabupaten' => '331225',
                'nama_kecamatan' => 'Puhpelem',
            ),
            198 => 
            array (
                'id_kecamatan' => '3313',
                'id_kabupaten' => '331317',
                'nama_kecamatan' => 'Jenawi',
            ),
            199 => 
            array (
                'id_kecamatan' => '3314',
                'id_kabupaten' => '331420',
                'nama_kecamatan' => 'Jenar',
            ),
            200 => 
            array (
                'id_kecamatan' => '3315',
                'id_kabupaten' => '331519',
                'nama_kecamatan' => 'Tanggungharjo',
            ),
            201 => 
            array (
                'id_kecamatan' => '3316',
                'id_kabupaten' => '331616',
                'nama_kecamatan' => 'Japah',
            ),
            202 => 
            array (
                'id_kecamatan' => '3317',
                'id_kabupaten' => '331714',
                'nama_kecamatan' => 'Lasem',
            ),
            203 => 
            array (
                'id_kecamatan' => '3318',
                'id_kabupaten' => '331821',
                'nama_kecamatan' => 'Trangkil',
            ),
            204 => 
            array (
                'id_kecamatan' => '3319',
                'id_kabupaten' => '331909',
                'nama_kecamatan' => 'Dawe',
            ),
            205 => 
            array (
                'id_kecamatan' => '3320',
                'id_kabupaten' => '332016',
                'nama_kecamatan' => 'Donorojo',
            ),
            206 => 
            array (
                'id_kecamatan' => '3321',
                'id_kabupaten' => '332114',
                'nama_kecamatan' => 'Kebonagung',
            ),
            207 => 
            array (
                'id_kecamatan' => '3322',
                'id_kabupaten' => '332220',
                'nama_kecamatan' => 'Bandungan',
            ),
            208 => 
            array (
                'id_kecamatan' => '3323',
                'id_kabupaten' => '332320',
                'nama_kecamatan' => 'Gemawang',
            ),
            209 => 
            array (
                'id_kecamatan' => '3324',
                'id_kabupaten' => '332420',
                'nama_kecamatan' => 'Kaliwungu Selatan',
            ),
            210 => 
            array (
                'id_kecamatan' => '3325',
                'id_kabupaten' => '332515',
                'nama_kecamatan' => 'Banyuputih',
            ),
            211 => 
            array (
                'id_kecamatan' => '3326',
                'id_kabupaten' => '332619',
                'nama_kecamatan' => 'Wonokerto',
            ),
            212 => 
            array (
                'id_kecamatan' => '3327',
                'id_kabupaten' => '332714',
                'nama_kecamatan' => 'Warungpring',
            ),
            213 => 
            array (
                'id_kecamatan' => '3328',
                'id_kabupaten' => '332818',
                'nama_kecamatan' => 'Dukuhwaru',
            ),
            214 => 
            array (
                'id_kecamatan' => '3329',
                'id_kabupaten' => '332917',
                'nama_kecamatan' => 'Banjarharjo',
            ),
            215 => 
            array (
                'id_kecamatan' => '3371',
                'id_kabupaten' => '337103',
                'nama_kecamatan' => 'Magelang Tengah',
            ),
            216 => 
            array (
                'id_kecamatan' => '3372',
                'id_kabupaten' => '337205',
                'nama_kecamatan' => 'Banjarsari',
            ),
            217 => 
            array (
                'id_kecamatan' => '3373',
                'id_kabupaten' => '337304',
                'nama_kecamatan' => 'Sidomukti',
            ),
            218 => 
            array (
                'id_kecamatan' => '3374',
                'id_kabupaten' => '337416',
                'nama_kecamatan' => 'Tugu',
            ),
            219 => 
            array (
                'id_kecamatan' => '3375',
                'id_kabupaten' => '337504',
                'nama_kecamatan' => 'Pekalongan Selatan',
            ),
            220 => 
            array (
                'id_kecamatan' => '3376',
                'id_kabupaten' => '337604',
                'nama_kecamatan' => 'Margadana',
            ),
            221 => 
            array (
                'id_kecamatan' => '3401',
                'id_kabupaten' => '340112',
                'nama_kecamatan' => 'Kalibawang',
            ),
            222 => 
            array (
                'id_kecamatan' => '3402',
                'id_kabupaten' => '340217',
                'nama_kecamatan' => 'Sedayu',
            ),
            223 => 
            array (
                'id_kecamatan' => '3403',
                'id_kabupaten' => '340318',
                'nama_kecamatan' => 'Purwosari',
            ),
            224 => 
            array (
                'id_kecamatan' => '3404',
                'id_kabupaten' => '340417',
                'nama_kecamatan' => 'Cangkringan',
            ),
            225 => 
            array (
                'id_kecamatan' => '3471',
                'id_kabupaten' => '347114',
                'nama_kecamatan' => 'Kotagede',
            ),
            226 => 
            array (
                'id_kecamatan' => '3501',
                'id_kabupaten' => '350112',
                'nama_kecamatan' => 'Sudimoro',
            ),
            227 => 
            array (
                'id_kecamatan' => '3502',
                'id_kabupaten' => '350221',
                'nama_kecamatan' => 'Pudak',
            ),
            228 => 
            array (
                'id_kecamatan' => '3503',
                'id_kabupaten' => '350314',
                'nama_kecamatan' => 'Suruh',
            ),
            229 => 
            array (
                'id_kecamatan' => '3504',
                'id_kabupaten' => '350419',
                'nama_kecamatan' => 'Tanggunggunung',
            ),
            230 => 
            array (
                'id_kecamatan' => '3505',
                'id_kabupaten' => '350522',
                'nama_kecamatan' => 'Selopuro',
            ),
            231 => 
            array (
                'id_kecamatan' => '3506',
                'id_kabupaten' => '350626',
                'nama_kecamatan' => 'Badas',
            ),
            232 => 
            array (
                'id_kecamatan' => '3507',
                'id_kabupaten' => '350733',
                'nama_kecamatan' => 'Pagelaran',
            ),
            233 => 
            array (
                'id_kecamatan' => '3508',
                'id_kabupaten' => '350821',
                'nama_kecamatan' => 'Sumbersuko',
            ),
            234 => 
            array (
                'id_kecamatan' => '3509',
                'id_kabupaten' => '350931',
                'nama_kecamatan' => 'Sumberjambe',
            ),
            235 => 
            array (
                'id_kecamatan' => '3510',
                'id_kabupaten' => '351025',
                'nama_kecamatan' => 'Blimbingsari',
            ),
            236 => 
            array (
                'id_kecamatan' => '3511',
                'id_kabupaten' => '351123',
                'nama_kecamatan' => 'Jambesari Darus Sholah',
            ),
            237 => 
            array (
                'id_kecamatan' => '3512',
                'id_kabupaten' => '351217',
                'nama_kecamatan' => 'Bungatan',
            ),
            238 => 
            array (
                'id_kecamatan' => '3513',
                'id_kabupaten' => '351324',
                'nama_kecamatan' => 'Lumbang',
            ),
            239 => 
            array (
                'id_kecamatan' => '3514',
                'id_kabupaten' => '351424',
                'nama_kecamatan' => 'Tosari',
            ),
            240 => 
            array (
                'id_kecamatan' => '3515',
                'id_kabupaten' => '351518',
                'nama_kecamatan' => 'Waru',
            ),
            241 => 
            array (
                'id_kecamatan' => '3516',
                'id_kabupaten' => '351618',
                'nama_kecamatan' => 'Mojoanyar',
            ),
            242 => 
            array (
                'id_kecamatan' => '3517',
                'id_kabupaten' => '351721',
                'nama_kecamatan' => 'Ngusikan',
            ),
            243 => 
            array (
                'id_kecamatan' => '3518',
                'id_kabupaten' => '351820',
                'nama_kecamatan' => 'Jatikalen',
            ),
            244 => 
            array (
                'id_kecamatan' => '3519',
                'id_kabupaten' => '351915',
                'nama_kecamatan' => 'Wonoasri',
            ),
            245 => 
            array (
                'id_kecamatan' => '3520',
                'id_kabupaten' => '352018',
                'nama_kecamatan' => 'Sidorejo',
            ),
            246 => 
            array (
                'id_kecamatan' => '3521',
                'id_kabupaten' => '352119',
                'nama_kecamatan' => 'Kasreman',
            ),
            247 => 
            array (
                'id_kecamatan' => '3522',
                'id_kabupaten' => '352228',
                'nama_kecamatan' => 'Gayam',
            ),
            248 => 
            array (
                'id_kecamatan' => '3523',
                'id_kabupaten' => '352320',
                'nama_kecamatan' => 'Grabagan',
            ),
            249 => 
            array (
                'id_kecamatan' => '3524',
                'id_kabupaten' => '352427',
                'nama_kecamatan' => 'Sarirejo',
            ),
            250 => 
            array (
                'id_kecamatan' => '3525',
                'id_kabupaten' => '352518',
                'nama_kecamatan' => 'Tambak',
            ),
            251 => 
            array (
                'id_kecamatan' => '3526',
                'id_kabupaten' => '352618',
                'nama_kecamatan' => 'Galis',
            ),
            252 => 
            array (
                'id_kecamatan' => '3527',
                'id_kabupaten' => '352714',
                'nama_kecamatan' => 'Karangpenang',
            ),
            253 => 
            array (
                'id_kecamatan' => '3528',
                'id_kabupaten' => '352813',
                'nama_kecamatan' => 'Pasean',
            ),
            254 => 
            array (
                'id_kecamatan' => '3529',
                'id_kabupaten' => '352927',
                'nama_kecamatan' => 'Kangayan',
            ),
            255 => 
            array (
                'id_kecamatan' => '3571',
                'id_kabupaten' => '357103',
                'nama_kecamatan' => 'Pesantren',
            ),
            256 => 
            array (
                'id_kecamatan' => '3572',
                'id_kabupaten' => '357203',
                'nama_kecamatan' => 'Sananwetan',
            ),
            257 => 
            array (
                'id_kecamatan' => '3573',
                'id_kabupaten' => '357305',
                'nama_kecamatan' => 'Lowokwaru',
            ),
            258 => 
            array (
                'id_kecamatan' => '3574',
                'id_kabupaten' => '357405',
                'nama_kecamatan' => 'Kedopok',
            ),
            259 => 
            array (
                'id_kecamatan' => '3575',
                'id_kabupaten' => '357504',
                'nama_kecamatan' => 'Panggungrejo',
            ),
            260 => 
            array (
                'id_kecamatan' => '3576',
                'id_kabupaten' => '357603',
                'nama_kecamatan' => 'Kranggan',
            ),
            261 => 
            array (
                'id_kecamatan' => '3577',
                'id_kabupaten' => '357703',
                'nama_kecamatan' => 'Taman',
            ),
            262 => 
            array (
                'id_kecamatan' => '3578',
                'id_kabupaten' => '357831',
                'nama_kecamatan' => 'Sambikerep',
            ),
            263 => 
            array (
                'id_kecamatan' => '3579',
                'id_kabupaten' => '357903',
                'nama_kecamatan' => 'Junrejo',
            ),
            264 => 
            array (
                'id_kecamatan' => '3601',
                'id_kabupaten' => '360135',
                'nama_kecamatan' => 'Sobang',
            ),
            265 => 
            array (
                'id_kecamatan' => '3602',
                'id_kabupaten' => '360228',
                'nama_kecamatan' => 'Cigemblong',
            ),
            266 => 
            array (
                'id_kecamatan' => '3603',
                'id_kabupaten' => '360333',
                'nama_kecamatan' => 'Mekar Baru',
            ),
            267 => 
            array (
                'id_kecamatan' => '3604',
                'id_kabupaten' => '360435',
                'nama_kecamatan' => 'Lebak Wangi',
            ),
            268 => 
            array (
                'id_kecamatan' => '3671',
                'id_kabupaten' => '367113',
                'nama_kecamatan' => 'Larangan',
            ),
            269 => 
            array (
                'id_kecamatan' => '3672',
                'id_kabupaten' => '367208',
                'nama_kecamatan' => 'Citangkil',
            ),
            270 => 
            array (
                'id_kecamatan' => '3673',
                'id_kabupaten' => '367306',
                'nama_kecamatan' => 'Taktakan',
            ),
            271 => 
            array (
                'id_kecamatan' => '3674',
                'id_kabupaten' => '367407',
                'nama_kecamatan' => 'Setu',
            ),
            272 => 
            array (
                'id_kecamatan' => '5101',
                'id_kabupaten' => '510105',
                'nama_kecamatan' => 'Jembrana',
            ),
            273 => 
            array (
                'id_kecamatan' => '5102',
                'id_kabupaten' => '510210',
                'nama_kecamatan' => 'Pupuan',
            ),
            274 => 
            array (
                'id_kecamatan' => '5103',
                'id_kabupaten' => '510306',
                'nama_kecamatan' => 'Kuta Utara',
            ),
            275 => 
            array (
                'id_kecamatan' => '5104',
                'id_kabupaten' => '510407',
                'nama_kecamatan' => 'Payangan',
            ),
            276 => 
            array (
                'id_kecamatan' => '5105',
                'id_kabupaten' => '510504',
                'nama_kecamatan' => 'Dawan',
            ),
            277 => 
            array (
                'id_kecamatan' => '5106',
                'id_kabupaten' => '510604',
                'nama_kecamatan' => 'Kintamani',
            ),
            278 => 
            array (
                'id_kecamatan' => '5107',
                'id_kabupaten' => '510708',
                'nama_kecamatan' => 'Kubu',
            ),
            279 => 
            array (
                'id_kecamatan' => '5108',
                'id_kabupaten' => '510809',
                'nama_kecamatan' => 'Tejakula',
            ),
            280 => 
            array (
                'id_kecamatan' => '5171',
                'id_kabupaten' => '517104',
                'nama_kecamatan' => 'Denpasar Utara',
            ),
            281 => 
            array (
                'id_kecamatan' => '5201',
                'id_kabupaten' => '520115',
                'nama_kecamatan' => 'Kuripan',
            ),
            282 => 
            array (
                'id_kecamatan' => '5202',
                'id_kabupaten' => '520212',
                'nama_kecamatan' => 'Batukliang Utara',
            ),
            283 => 
            array (
                'id_kecamatan' => '5203',
                'id_kabupaten' => '520321',
                'nama_kecamatan' => 'Lenek',
            ),
            284 => 
            array (
                'id_kecamatan' => '5204',
                'id_kabupaten' => '520429',
                'nama_kecamatan' => 'Lantung',
            ),
            285 => 
            array (
                'id_kecamatan' => '5205',
                'id_kabupaten' => '520508',
                'nama_kecamatan' => 'Pajo',
            ),
            286 => 
            array (
                'id_kecamatan' => '5206',
                'id_kabupaten' => '520618',
                'nama_kecamatan' => 'Palibelo',
            ),
            287 => 
            array (
                'id_kecamatan' => '5207',
                'id_kabupaten' => '520708',
                'nama_kecamatan' => 'Maluk',
            ),
            288 => 
            array (
                'id_kecamatan' => '5208',
                'id_kabupaten' => '520805',
                'nama_kecamatan' => 'Pemenang',
            ),
            289 => 
            array (
                'id_kecamatan' => '5271',
                'id_kabupaten' => '527106',
                'nama_kecamatan' => 'Sandubaya',
            ),
            290 => 
            array (
                'id_kecamatan' => '5272',
                'id_kabupaten' => '527205',
                'nama_kecamatan' => 'Mpunda',
            ),
            291 => 
            array (
                'id_kecamatan' => '5301',
                'id_kabupaten' => '530130',
                'nama_kecamatan' => 'Amfoang Tengah',
            ),
            292 => 
            array (
                'id_kecamatan' => '5302',
                'id_kabupaten' => '530232',
                'nama_kecamatan' => 'Nunbena',
            ),
            293 => 
            array (
                'id_kecamatan' => '5303',
                'id_kabupaten' => '530324',
                'nama_kecamatan' => 'Biboki Feotleu',
            ),
            294 => 
            array (
                'id_kecamatan' => '5304',
                'id_kabupaten' => '530423',
                'nama_kecamatan' => 'Nanaet Duabesi',
            ),
            295 => 
            array (
                'id_kecamatan' => '5305',
                'id_kabupaten' => '530518',
                'nama_kecamatan' => 'Abad Selatan',
            ),
            296 => 
            array (
                'id_kecamatan' => '5306',
                'id_kabupaten' => '530619',
                'nama_kecamatan' => 'Solor Selatan',
            ),
            297 => 
            array (
                'id_kecamatan' => '5307',
                'id_kabupaten' => '530721',
                'nama_kecamatan' => 'Mapitara',
            ),
            298 => 
            array (
                'id_kecamatan' => '5308',
                'id_kabupaten' => '530821',
                'nama_kecamatan' => 'Lepembusu Kelisoke',
            ),
            299 => 
            array (
                'id_kecamatan' => '5309',
                'id_kabupaten' => '530920',
                'nama_kecamatan' => 'Inerie',
            ),
            300 => 
            array (
                'id_kecamatan' => '5310',
                'id_kabupaten' => '531018',
                'nama_kecamatan' => 'Satar Mese Utara',
            ),
            301 => 
            array (
                'id_kecamatan' => '5311',
                'id_kabupaten' => '531122',
                'nama_kecamatan' => 'Mahu',
            ),
            302 => 
            array (
                'id_kecamatan' => '5312',
                'id_kabupaten' => '531218',
                'nama_kecamatan' => 'Laboya Barat',
            ),
            303 => 
            array (
                'id_kecamatan' => '5313',
                'id_kabupaten' => '531309',
                'nama_kecamatan' => 'Ile Ape Timur',
            ),
            304 => 
            array (
                'id_kecamatan' => '5314',
                'id_kabupaten' => '531411',
                'nama_kecamatan' => 'Loaholu',
            ),
            305 => 
            array (
                'id_kecamatan' => '5315',
                'id_kabupaten' => '531512',
                'nama_kecamatan' => 'Kuwus Barat',
            ),
            306 => 
            array (
                'id_kecamatan' => '5316',
                'id_kabupaten' => '531607',
                'nama_kecamatan' => 'Aesesa Selatan',
            ),
            307 => 
            array (
                'id_kecamatan' => '5317',
                'id_kabupaten' => '531706',
                'nama_kecamatan' => 'Umbu Ratu Nggay Tengah',
            ),
            308 => 
            array (
                'id_kecamatan' => '5318',
                'id_kabupaten' => '531811',
                'nama_kecamatan' => 'Kodi Balaghar',
            ),
            309 => 
            array (
                'id_kecamatan' => '5319',
                'id_kabupaten' => '531912',
                'nama_kecamatan' => 'Congkar',
            ),
            310 => 
            array (
                'id_kecamatan' => '5320',
                'id_kabupaten' => '532006',
                'nama_kecamatan' => 'Raijua',
            ),
            311 => 
            array (
                'id_kecamatan' => '5321',
                'id_kabupaten' => '532112',
                'nama_kecamatan' => 'Botin Leobele',
            ),
            312 => 
            array (
                'id_kecamatan' => '5371',
                'id_kabupaten' => '537106',
                'nama_kecamatan' => 'Kota Lama',
            ),
            313 => 
            array (
                'id_kecamatan' => '6101',
                'id_kabupaten' => '610119',
                'nama_kecamatan' => 'Selakau Timur',
            ),
            314 => 
            array (
                'id_kecamatan' => '6102',
                'id_kabupaten' => '610218',
                'nama_kecamatan' => 'Mempawah Timur',
            ),
            315 => 
            array (
                'id_kecamatan' => '6103',
                'id_kabupaten' => '610321',
                'nama_kecamatan' => 'Entikong',
            ),
            316 => 
            array (
                'id_kecamatan' => '6104',
                'id_kabupaten' => '610425',
                'nama_kecamatan' => 'Sungai Melayu Rayak',
            ),
            317 => 
            array (
                'id_kecamatan' => '6105',
                'id_kabupaten' => '610521',
                'nama_kecamatan' => 'Binjai Hulu',
            ),
            318 => 
            array (
                'id_kecamatan' => '6106',
                'id_kabupaten' => '610623',
                'nama_kecamatan' => 'Puring Kencana',
            ),
            319 => 
            array (
                'id_kecamatan' => '6107',
                'id_kabupaten' => '610717',
                'nama_kecamatan' => 'Tujuh Belas',
            ),
            320 => 
            array (
                'id_kecamatan' => '6108',
                'id_kabupaten' => '610813',
                'nama_kecamatan' => 'Sompak',
            ),
            321 => 
            array (
                'id_kecamatan' => '6109',
                'id_kabupaten' => '610907',
                'nama_kecamatan' => 'Belitang',
            ),
            322 => 
            array (
                'id_kecamatan' => '6110',
                'id_kabupaten' => '611011',
                'nama_kecamatan' => 'Tanah Pinoh Barat',
            ),
            323 => 
            array (
                'id_kecamatan' => '6111',
                'id_kabupaten' => '611106',
                'nama_kecamatan' => 'Kepulauan Karimata',
            ),
            324 => 
            array (
                'id_kecamatan' => '6112',
                'id_kabupaten' => '611209',
                'nama_kecamatan' => 'Sungai Kakap',
            ),
            325 => 
            array (
                'id_kecamatan' => '6171',
                'id_kabupaten' => '617106',
                'nama_kecamatan' => 'Pontianak Tenggara',
            ),
            326 => 
            array (
                'id_kecamatan' => '6172',
                'id_kabupaten' => '617205',
                'nama_kecamatan' => 'Singkawang Selatan',
            ),
            327 => 
            array (
                'id_kecamatan' => '6201',
                'id_kabupaten' => '620106',
                'nama_kecamatan' => 'Pangkalan Banteng',
            ),
            328 => 
            array (
                'id_kecamatan' => '6202',
                'id_kabupaten' => '620217',
                'nama_kecamatan' => 'Telaga Antang',
            ),
            329 => 
            array (
                'id_kecamatan' => '6203',
                'id_kabupaten' => '620317',
                'nama_kecamatan' => 'Bataguh',
            ),
            330 => 
            array (
                'id_kecamatan' => '6204',
                'id_kabupaten' => '620406',
                'nama_kecamatan' => 'Dusun Selatan',
            ),
            331 => 
            array (
                'id_kecamatan' => '6205',
                'id_kabupaten' => '620509',
                'nama_kecamatan' => 'Lahei Barat',
            ),
            332 => 
            array (
                'id_kecamatan' => '6206',
                'id_kabupaten' => '620613',
                'nama_kecamatan' => 'Bukit Raya',
            ),
            333 => 
            array (
                'id_kecamatan' => '6207',
                'id_kabupaten' => '620710',
                'nama_kecamatan' => 'Suling Tambun',
            ),
            334 => 
            array (
                'id_kecamatan' => '6208',
                'id_kabupaten' => '620805',
                'nama_kecamatan' => 'Permata Kecubung',
            ),
            335 => 
            array (
                'id_kecamatan' => '6209',
                'id_kabupaten' => '620908',
                'nama_kecamatan' => 'Batang Kawa',
            ),
            336 => 
            array (
                'id_kecamatan' => '6210',
                'id_kabupaten' => '621012',
                'nama_kecamatan' => 'Rungan Barat',
            ),
            337 => 
            array (
                'id_kecamatan' => '6211',
                'id_kabupaten' => '621108',
                'nama_kecamatan' => 'Sebangau Kuala',
            ),
            338 => 
            array (
                'id_kecamatan' => '6212',
                'id_kabupaten' => '621210',
                'nama_kecamatan' => 'Uut Murung',
            ),
            339 => 
            array (
                'id_kecamatan' => '6213',
                'id_kabupaten' => '621310',
                'nama_kecamatan' => 'Karusen Janang',
            ),
            340 => 
            array (
                'id_kecamatan' => '6271',
                'id_kabupaten' => '627105',
                'nama_kecamatan' => 'Rakumpit',
            ),
            341 => 
            array (
                'id_kecamatan' => '6301',
                'id_kabupaten' => '630111',
                'nama_kecamatan' => 'Bumi Makmur',
            ),
            342 => 
            array (
                'id_kecamatan' => '6302',
                'id_kabupaten' => '630222',
                'nama_kecamatan' => 'Pulaulaut Sigam',
            ),
            343 => 
            array (
                'id_kecamatan' => '6303',
                'id_kabupaten' => '630320',
                'nama_kecamatan' => 'Cintapuri Darussalam',
            ),
            344 => 
            array (
                'id_kecamatan' => '6304',
                'id_kabupaten' => '630417',
                'nama_kecamatan' => 'Jejangkit',
            ),
            345 => 
            array (
                'id_kecamatan' => '6305',
                'id_kabupaten' => '630512',
                'nama_kecamatan' => 'Hatungun',
            ),
            346 => 
            array (
                'id_kecamatan' => '6306',
                'id_kabupaten' => '630611',
                'nama_kecamatan' => 'Daha Barat',
            ),
            347 => 
            array (
                'id_kecamatan' => '6307',
                'id_kabupaten' => '630711',
                'nama_kecamatan' => 'Limpasu',
            ),
            348 => 
            array (
                'id_kecamatan' => '6308',
                'id_kabupaten' => '630810',
                'nama_kecamatan' => 'Sungai Tabukan',
            ),
            349 => 
            array (
                'id_kecamatan' => '6309',
                'id_kabupaten' => '630912',
                'nama_kecamatan' => 'Bintang Ara',
            ),
            350 => 
            array (
                'id_kecamatan' => '6310',
                'id_kabupaten' => '631012',
                'nama_kecamatan' => 'Teluk Kepayang',
            ),
            351 => 
            array (
                'id_kecamatan' => '6311',
                'id_kabupaten' => '631108',
                'nama_kecamatan' => 'Tebing Tinggi',
            ),
            352 => 
            array (
                'id_kecamatan' => '6371',
                'id_kabupaten' => '637105',
                'nama_kecamatan' => 'Banjarmasin Tengah',
            ),
            353 => 
            array (
                'id_kecamatan' => '6372',
                'id_kabupaten' => '637206',
                'nama_kecamatan' => 'Liang Anggang',
            ),
            354 => 
            array (
                'id_kecamatan' => '6401',
                'id_kabupaten' => '640110',
                'nama_kecamatan' => 'Muara Samu',
            ),
            355 => 
            array (
                'id_kecamatan' => '6402',
                'id_kabupaten' => '640220',
                'nama_kecamatan' => 'Samboja Barat',
            ),
            356 => 
            array (
                'id_kecamatan' => '6403',
                'id_kabupaten' => '640313',
                'nama_kecamatan' => 'Biatan',
            ),
            357 => 
            array (
                'id_kecamatan' => '6407',
                'id_kabupaten' => '640720',
                'nama_kecamatan' => 'Sekolaq Darat',
            ),
            358 => 
            array (
                'id_kecamatan' => '6408',
                'id_kabupaten' => '640818',
                'nama_kecamatan' => 'Long Mesangat',
            ),
            359 => 
            array (
                'id_kecamatan' => '6409',
                'id_kabupaten' => '640904',
                'nama_kecamatan' => 'Sepaku',
            ),
            360 => 
            array (
                'id_kecamatan' => '6411',
                'id_kabupaten' => '641105',
                'nama_kecamatan' => 'Long Pahangai',
            ),
            361 => 
            array (
                'id_kecamatan' => '6471',
                'id_kabupaten' => '647106',
                'nama_kecamatan' => 'Balikpapan Kota',
            ),
            362 => 
            array (
                'id_kecamatan' => '6472',
                'id_kabupaten' => '647210',
                'nama_kecamatan' => 'Loa Janan Ilir',
            ),
            363 => 
            array (
                'id_kecamatan' => '6474',
                'id_kabupaten' => '647403',
                'nama_kecamatan' => 'Bontang Barat',
            ),
            364 => 
            array (
                'id_kecamatan' => '6501',
                'id_kabupaten' => '650110',
                'nama_kecamatan' => 'Bunyu',
            ),
            365 => 
            array (
                'id_kecamatan' => '6502',
                'id_kabupaten' => '650215',
                'nama_kecamatan' => 'Sungai Tubu',
            ),
            366 => 
            array (
                'id_kecamatan' => '6503',
                'id_kabupaten' => '650321',
                'nama_kecamatan' => 'Lumbis Hulu',
            ),
            367 => 
            array (
                'id_kecamatan' => '6504',
                'id_kabupaten' => '650405',
                'nama_kecamatan' => 'Muruk Rian',
            ),
            368 => 
            array (
                'id_kecamatan' => '6571',
                'id_kabupaten' => '657104',
                'nama_kecamatan' => 'Tarakan Utara',
            ),
            369 => 
            array (
                'id_kecamatan' => '7101',
                'id_kabupaten' => '710135',
                'nama_kecamatan' => 'Dumoga Tengah',
            ),
            370 => 
            array (
                'id_kecamatan' => '7102',
                'id_kabupaten' => '710225',
                'nama_kecamatan' => 'Tompaso Barat',
            ),
            371 => 
            array (
                'id_kecamatan' => '7103',
                'id_kabupaten' => '710325',
                'nama_kecamatan' => 'Kepulauan Marore',
            ),
            372 => 
            array (
                'id_kecamatan' => '7104',
                'id_kabupaten' => '710419',
                'nama_kecamatan' => 'Essang Selatan',
            ),
            373 => 
            array (
                'id_kecamatan' => '7105',
                'id_kabupaten' => '710523',
                'nama_kecamatan' => 'Suluun Tareran',
            ),
            374 => 
            array (
                'id_kecamatan' => '7106',
                'id_kabupaten' => '710610',
                'nama_kecamatan' => 'Likupang Selatan',
            ),
            375 => 
            array (
                'id_kecamatan' => '7107',
                'id_kabupaten' => '710712',
                'nama_kecamatan' => 'Ratahan Timur',
            ),
            376 => 
            array (
                'id_kecamatan' => '7108',
                'id_kabupaten' => '710806',
                'nama_kecamatan' => 'Pinogaluman',
            ),
            377 => 
            array (
                'id_kecamatan' => '7109',
                'id_kabupaten' => '710910',
                'nama_kecamatan' => 'Tagulandang Selatan',
            ),
            378 => 
            array (
                'id_kecamatan' => '7110',
                'id_kabupaten' => '711007',
                'nama_kecamatan' => 'Mooat',
            ),
            379 => 
            array (
                'id_kecamatan' => '7111',
                'id_kabupaten' => '711107',
                'nama_kecamatan' => 'Tomini',
            ),
            380 => 
            array (
                'id_kecamatan' => '7171',
                'id_kabupaten' => '717111',
                'nama_kecamatan' => 'Paal Dua',
            ),
            381 => 
            array (
                'id_kecamatan' => '7172',
                'id_kabupaten' => '717208',
                'nama_kecamatan' => 'Lembeh Utara',
            ),
            382 => 
            array (
                'id_kecamatan' => '7173',
                'id_kabupaten' => '717305',
                'nama_kecamatan' => 'Tomohon Timur',
            ),
            383 => 
            array (
                'id_kecamatan' => '7174',
                'id_kabupaten' => '717404',
                'nama_kecamatan' => 'Kotamobagu Barat',
            ),
            384 => 
            array (
                'id_kecamatan' => '7201',
                'id_kabupaten' => '720124',
                'nama_kecamatan' => 'Toili Jaya',
            ),
            385 => 
            array (
                'id_kecamatan' => '7202',
                'id_kabupaten' => '720227',
                'nama_kecamatan' => 'Pamona Utara',
            ),
            386 => 
            array (
                'id_kecamatan' => '7203',
                'id_kabupaten' => '720331',
                'nama_kecamatan' => 'Balaesang Tanjung',
            ),
            387 => 
            array (
                'id_kecamatan' => '7204',
                'id_kabupaten' => '720410',
                'nama_kecamatan' => 'Dako Pemean',
            ),
            388 => 
            array (
                'id_kecamatan' => '7205',
                'id_kabupaten' => '720511',
                'nama_kecamatan' => 'Paleleh Barat',
            ),
            389 => 
            array (
                'id_kecamatan' => '7206',
                'id_kabupaten' => '720620',
                'nama_kecamatan' => 'Sombori Kepulauan',
            ),
            390 => 
            array (
                'id_kecamatan' => '7207',
                'id_kabupaten' => '720719',
                'nama_kecamatan' => 'Tinangkung Utara',
            ),
            391 => 
            array (
                'id_kecamatan' => '7208',
                'id_kabupaten' => '720823',
                'nama_kecamatan' => 'Sidoan',
            ),
            392 => 
            array (
                'id_kecamatan' => '7209',
                'id_kabupaten' => '720912',
                'nama_kecamatan' => 'Talatako',
            ),
            393 => 
            array (
                'id_kecamatan' => '7210',
                'id_kabupaten' => '721015',
                'nama_kecamatan' => 'Marawola Barat',
            ),
            394 => 
            array (
                'id_kecamatan' => '7211',
                'id_kabupaten' => '721107',
                'nama_kecamatan' => 'Banggai Tengah',
            ),
            395 => 
            array (
                'id_kecamatan' => '7212',
                'id_kabupaten' => '721210',
                'nama_kecamatan' => 'Petasia Barat',
            ),
            396 => 
            array (
                'id_kecamatan' => '7271',
                'id_kabupaten' => '727108',
                'nama_kecamatan' => 'Mantikulore',
            ),
            397 => 
            array (
                'id_kecamatan' => '7301',
                'id_kabupaten' => '730111',
                'nama_kecamatan' => 'Buki',
            ),
            398 => 
            array (
                'id_kecamatan' => '7302',
                'id_kabupaten' => '730210',
                'nama_kecamatan' => 'Rilauale',
            ),
            399 => 
            array (
                'id_kecamatan' => '7303',
                'id_kabupaten' => '730308',
                'nama_kecamatan' => 'Sinoa',
            ),
            400 => 
            array (
                'id_kecamatan' => '7304',
                'id_kabupaten' => '730411',
                'nama_kecamatan' => 'Tarowang',
            ),
            401 => 
            array (
                'id_kecamatan' => '7305',
                'id_kabupaten' => '730512',
                'nama_kecamatan' => 'Laikang',
            ),
            402 => 
            array (
                'id_kecamatan' => '7306',
                'id_kabupaten' => '730618',
                'nama_kecamatan' => 'Bajeng Barat',
            ),
            403 => 
            array (
                'id_kecamatan' => '7307',
                'id_kabupaten' => '730709',
                'nama_kecamatan' => 'Pulau Sembilan',
            ),
            404 => 
            array (
                'id_kecamatan' => '7308',
                'id_kabupaten' => '730827',
                'nama_kecamatan' => 'Patimpeng',
            ),
            405 => 
            array (
                'id_kecamatan' => '7309',
                'id_kabupaten' => '730914',
                'nama_kecamatan' => 'Turikale',
            ),
            406 => 
            array (
                'id_kecamatan' => '7310',
                'id_kabupaten' => '731013',
                'nama_kecamatan' => 'Liukang Tupabbiring Utara',
            ),
            407 => 
            array (
                'id_kecamatan' => '7311',
                'id_kabupaten' => '731107',
                'nama_kecamatan' => 'Balusu',
            ),
            408 => 
            array (
                'id_kecamatan' => '7312',
                'id_kabupaten' => '731208',
                'nama_kecamatan' => 'Citta',
            ),
            409 => 
            array (
                'id_kecamatan' => '7313',
                'id_kabupaten' => '731314',
                'nama_kecamatan' => 'Keera',
            ),
            410 => 
            array (
                'id_kecamatan' => '7314',
                'id_kabupaten' => '731411',
                'nama_kecamatan' => 'Pitu Riase',
            ),
            411 => 
            array (
                'id_kecamatan' => '7315',
                'id_kabupaten' => '731512',
                'nama_kecamatan' => 'Batulappa',
            ),
            412 => 
            array (
                'id_kecamatan' => '7316',
                'id_kabupaten' => '731612',
                'nama_kecamatan' => 'Baroko',
            ),
            413 => 
            array (
                'id_kecamatan' => '7317',
                'id_kabupaten' => '731722',
                'nama_kecamatan' => 'Basse Sangtempe Utara',
            ),
            414 => 
            array (
                'id_kecamatan' => '7318',
                'id_kabupaten' => '731838',
                'nama_kecamatan' => 'Kurra',
            ),
            415 => 
            array (
                'id_kecamatan' => '7322',
                'id_kabupaten' => '732215',
                'nama_kecamatan' => 'Sabbang Selatan',
            ),
            416 => 
            array (
                'id_kecamatan' => '7324',
                'id_kabupaten' => '732411',
                'nama_kecamatan' => 'Wasuponda',
            ),
            417 => 
            array (
                'id_kecamatan' => '7326',
                'id_kabupaten' => '732621',
                'nama_kecamatan' => 'Awan Rante Karua',
            ),
            418 => 
            array (
                'id_kecamatan' => '7371',
                'id_kabupaten' => '737115',
                'nama_kecamatan' => 'Kepulauan Sangkarrang',
            ),
            419 => 
            array (
                'id_kecamatan' => '7372',
                'id_kabupaten' => '737204',
                'nama_kecamatan' => 'Bacukiki Barat',
            ),
            420 => 
            array (
                'id_kecamatan' => '7373',
                'id_kabupaten' => '737309',
                'nama_kecamatan' => 'Bara',
            ),
            421 => 
            array (
                'id_kecamatan' => '7401',
                'id_kabupaten' => '740127',
                'nama_kecamatan' => 'Iwoimendaa',
            ),
            422 => 
            array (
                'id_kecamatan' => '7402',
                'id_kabupaten' => '740242',
                'nama_kecamatan' => 'Tongauna Utara',
            ),
            423 => 
            array (
                'id_kecamatan' => '7403',
                'id_kabupaten' => '740337',
                'nama_kecamatan' => 'Towea',
            ),
            424 => 
            array (
                'id_kecamatan' => '7404',
                'id_kabupaten' => '740429',
                'nama_kecamatan' => 'Wabula',
            ),
            425 => 
            array (
                'id_kecamatan' => '7405',
                'id_kabupaten' => '740525',
                'nama_kecamatan' => 'Andoolo Barat',
            ),
            426 => 
            array (
                'id_kecamatan' => '7406',
                'id_kabupaten' => '740622',
                'nama_kecamatan' => 'Mata Usu',
            ),
            427 => 
            array (
                'id_kecamatan' => '7407',
                'id_kabupaten' => '740708',
                'nama_kecamatan' => 'Togo Binongko',
            ),
            428 => 
            array (
                'id_kecamatan' => '7408',
                'id_kabupaten' => '740815',
                'nama_kecamatan' => 'Tolala',
            ),
            429 => 
            array (
                'id_kecamatan' => '7409',
                'id_kabupaten' => '740913',
                'nama_kecamatan' => 'Landawe',
            ),
            430 => 
            array (
                'id_kecamatan' => '7410',
                'id_kabupaten' => '741006',
                'nama_kecamatan' => 'Wakorumba Utara',
            ),
            431 => 
            array (
                'id_kecamatan' => '7411',
                'id_kabupaten' => '741112',
                'nama_kecamatan' => 'Dangia',
            ),
            432 => 
            array (
                'id_kecamatan' => '7412',
                'id_kabupaten' => '741207',
                'nama_kecamatan' => 'Wawonii Tengah',
            ),
            433 => 
            array (
                'id_kecamatan' => '7413',
                'id_kabupaten' => '741311',
                'nama_kecamatan' => 'Napano Kusambi',
            ),
            434 => 
            array (
                'id_kecamatan' => '7414',
                'id_kabupaten' => '741407',
                'nama_kecamatan' => 'Sangia Wambulu',
            ),
            435 => 
            array (
                'id_kecamatan' => '7415',
                'id_kabupaten' => '741507',
                'nama_kecamatan' => 'Kadatua',
            ),
            436 => 
            array (
                'id_kecamatan' => '7471',
                'id_kabupaten' => '747111',
                'nama_kecamatan' => 'Nambo',
            ),
            437 => 
            array (
                'id_kecamatan' => '7472',
                'id_kabupaten' => '747208',
                'nama_kecamatan' => 'Batupoaro',
            ),
            438 => 
            array (
                'id_kecamatan' => '7501',
                'id_kabupaten' => '750124',
                'nama_kecamatan' => 'Dungaliyo',
            ),
            439 => 
            array (
                'id_kecamatan' => '7502',
                'id_kabupaten' => '750207',
                'nama_kecamatan' => 'Paguyaman Pantai',
            ),
            440 => 
            array (
                'id_kecamatan' => '7503',
                'id_kabupaten' => '750318',
                'nama_kecamatan' => 'Pinogu',
            ),
            441 => 
            array (
                'id_kecamatan' => '7504',
                'id_kabupaten' => '750413',
                'nama_kecamatan' => 'Popayato Barat',
            ),
            442 => 
            array (
                'id_kecamatan' => '7505',
                'id_kabupaten' => '750511',
                'nama_kecamatan' => 'Sumalata Timur',
            ),
            443 => 
            array (
                'id_kecamatan' => '7571',
                'id_kabupaten' => '757109',
                'nama_kecamatan' => 'Hulonthalangi',
            ),
            444 => 
            array (
                'id_kecamatan' => '7601',
                'id_kabupaten' => '760112',
                'nama_kecamatan' => 'Lariang',
            ),
            445 => 
            array (
                'id_kecamatan' => '7602',
                'id_kabupaten' => '760216',
                'nama_kecamatan' => 'Kepulauan Bala Balakang',
            ),
            446 => 
            array (
                'id_kecamatan' => '7603',
                'id_kabupaten' => '760317',
                'nama_kecamatan' => 'Mehalaan',
            ),
            447 => 
            array (
                'id_kecamatan' => '7604',
                'id_kabupaten' => '760416',
                'nama_kecamatan' => 'Bulo',
            ),
            448 => 
            array (
                'id_kecamatan' => '7605',
                'id_kabupaten' => '760508',
                'nama_kecamatan' => 'Banggae Timur',
            ),
            449 => 
            array (
                'id_kecamatan' => '7606',
                'id_kabupaten' => '760605',
                'nama_kecamatan' => 'Karossa',
            ),
            450 => 
            array (
                'id_kecamatan' => '8101',
                'id_kabupaten' => '810126',
                'nama_kecamatan' => 'Saparua Timur',
            ),
            451 => 
            array (
                'id_kecamatan' => '8102',
                'id_kabupaten' => '810219',
                'nama_kecamatan' => 'Kei Kecil Timur Selatan',
            ),
            452 => 
            array (
                'id_kecamatan' => '8103',
                'id_kabupaten' => '810318',
                'nama_kecamatan' => 'Molu Maru',
            ),
            453 => 
            array (
                'id_kecamatan' => '8104',
                'id_kabupaten' => '810415',
                'nama_kecamatan' => 'Lilialy',
            ),
            454 => 
            array (
                'id_kecamatan' => '8105',
                'id_kabupaten' => '810516',
                'nama_kecamatan' => 'Ukar Sengan',
            ),
            455 => 
            array (
                'id_kecamatan' => '8106',
                'id_kabupaten' => '810611',
                'nama_kecamatan' => 'Elpaputih',
            ),
            456 => 
            array (
                'id_kecamatan' => '8107',
                'id_kabupaten' => '810710',
                'nama_kecamatan' => 'Aru Selatan Utara',
            ),
            457 => 
            array (
                'id_kecamatan' => '8108',
                'id_kabupaten' => '810817',
                'nama_kecamatan' => 'Kisar Utara',
            ),
            458 => 
            array (
                'id_kecamatan' => '8109',
                'id_kabupaten' => '810906',
                'nama_kecamatan' => 'Fena Fafan',
            ),
            459 => 
            array (
                'id_kecamatan' => '8171',
                'id_kabupaten' => '817105',
                'nama_kecamatan' => 'Leitimur Selatan',
            ),
            460 => 
            array (
                'id_kecamatan' => '8172',
                'id_kabupaten' => '817205',
                'nama_kecamatan' => 'Kur Selatan',
            ),
            461 => 
            array (
                'id_kecamatan' => '8201',
                'id_kabupaten' => '820110',
                'nama_kecamatan' => 'Loloda Tengah',
            ),
            462 => 
            array (
                'id_kecamatan' => '8202',
                'id_kabupaten' => '820210',
                'nama_kecamatan' => 'Patani Timur',
            ),
            463 => 
            array (
                'id_kecamatan' => '8203',
                'id_kabupaten' => '820322',
                'nama_kecamatan' => 'Kao Teluk',
            ),
            464 => 
            array (
                'id_kecamatan' => '8204',
                'id_kabupaten' => '820430',
                'nama_kecamatan' => 'Obi Utara',
            ),
            465 => 
            array (
                'id_kecamatan' => '8205',
                'id_kabupaten' => '820518',
                'nama_kecamatan' => 'Sanana Utara',
            ),
            466 => 
            array (
                'id_kecamatan' => '8206',
                'id_kabupaten' => '820610',
                'nama_kecamatan' => 'Kota Maba',
            ),
            467 => 
            array (
                'id_kecamatan' => '8207',
                'id_kabupaten' => '820706',
                'nama_kecamatan' => 'Pulau Rao',
            ),
            468 => 
            array (
                'id_kecamatan' => '8208',
                'id_kabupaten' => '820808',
                'nama_kecamatan' => 'Tabona',
            ),
            469 => 
            array (
                'id_kecamatan' => '8271',
                'id_kabupaten' => '827108',
                'nama_kecamatan' => 'Ternate Barat',
            ),
            470 => 
            array (
                'id_kecamatan' => '8272',
                'id_kabupaten' => '827208',
                'nama_kecamatan' => 'Tidore Timur',
            ),
            471 => 
            array (
                'id_kecamatan' => '9103',
                'id_kabupaten' => '910319',
                'nama_kecamatan' => 'Yokari',
            ),
            472 => 
            array (
                'id_kecamatan' => '9105',
                'id_kabupaten' => '910517',
                'nama_kecamatan' => 'Nusawani',
            ),
            473 => 
            array (
                'id_kecamatan' => '9106',
                'id_kabupaten' => '910621',
                'nama_kecamatan' => 'Bondifuar',
            ),
            474 => 
            array (
                'id_kecamatan' => '9110',
                'id_kabupaten' => '911015',
                'nama_kecamatan' => 'Bonggo Timur',
            ),
            475 => 
            array (
                'id_kecamatan' => '9111',
                'id_kabupaten' => '911111',
                'nama_kecamatan' => 'Kaisenar',
            ),
            476 => 
            array (
                'id_kecamatan' => '9115',
                'id_kabupaten' => '911515',
                'nama_kecamatan' => 'Soyoi Mambai',
            ),
            477 => 
            array (
                'id_kecamatan' => '9119',
                'id_kabupaten' => '911905',
                'nama_kecamatan' => 'Supiori Barat',
            ),
            478 => 
            array (
                'id_kecamatan' => '9120',
                'id_kabupaten' => '912008',
                'nama_kecamatan' => 'Sawai',
            ),
            479 => 
            array (
                'id_kecamatan' => '9171',
                'id_kabupaten' => '917105',
                'nama_kecamatan' => 'Heram',
            ),
            480 => 
            array (
                'id_kecamatan' => '9202',
                'id_kabupaten' => '920235',
                'nama_kecamatan' => 'Moruj Mega',
            ),
            481 => 
            array (
                'id_kecamatan' => '9203',
                'id_kabupaten' => '920317',
                'nama_kecamatan' => 'Tomage',
            ),
            482 => 
            array (
                'id_kecamatan' => '9206',
                'id_kabupaten' => '920624',
                'nama_kecamatan' => 'Moskona Timur',
            ),
            483 => 
            array (
                'id_kecamatan' => '9207',
                'id_kabupaten' => '920713',
                'nama_kecamatan' => 'Soug Jaya',
            ),
            484 => 
            array (
                'id_kecamatan' => '9208',
                'id_kabupaten' => '920807',
                'nama_kecamatan' => 'Yamor',
            ),
            485 => 
            array (
                'id_kecamatan' => '9211',
                'id_kabupaten' => '921106',
                'nama_kecamatan' => 'Tahota',
            ),
            486 => 
            array (
                'id_kecamatan' => '9212',
                'id_kabupaten' => '921210',
                'nama_kecamatan' => 'Hingk',
            ),
            487 => 
            array (
                'id_kecamatan' => '9301',
                'id_kabupaten' => '930122',
                'nama_kecamatan' => 'Kontuar',
            ),
            488 => 
            array (
                'id_kecamatan' => '9302',
                'id_kabupaten' => '930220',
                'nama_kecamatan' => 'Kawagit',
            ),
            489 => 
            array (
                'id_kecamatan' => '9303',
                'id_kabupaten' => '930315',
                'nama_kecamatan' => 'Ti Zain',
            ),
            490 => 
            array (
                'id_kecamatan' => '9304',
                'id_kabupaten' => '930425',
                'nama_kecamatan' => 'Sor Ep',
            ),
            491 => 
            array (
                'id_kecamatan' => '9401',
                'id_kabupaten' => '940115',
                'nama_kecamatan' => 'Menou',
            ),
            492 => 
            array (
                'id_kecamatan' => '9402',
                'id_kabupaten' => '940226',
                'nama_kecamatan' => 'Kiyage',
            ),
            493 => 
            array (
                'id_kecamatan' => '9403',
                'id_kabupaten' => '940324',
                'nama_kecamatan' => 'Fajar Timur',
            ),
            494 => 
            array (
                'id_kecamatan' => '9404',
                'id_kabupaten' => '940418',
                'nama_kecamatan' => 'Alama',
            ),
            495 => 
            array (
                'id_kecamatan' => '9405',
                'id_kabupaten' => '940525',
                'nama_kecamatan' => 'Erelmakawia',
            ),
            496 => 
            array (
                'id_kecamatan' => '9406',
                'id_kabupaten' => '940610',
                'nama_kecamatan' => 'Dogiyai',
            ),
            497 => 
            array (
                'id_kecamatan' => '9407',
                'id_kabupaten' => '940708',
                'nama_kecamatan' => 'Tomosiga',
            ),
            498 => 
            array (
                'id_kecamatan' => '9408',
                'id_kabupaten' => '940805',
                'nama_kecamatan' => 'Kapiraya',
            ),
            499 => 
            array (
                'id_kecamatan' => '9501',
                'id_kabupaten' => '950140',
                'nama_kecamatan' => 'Wesaput',
            ),
        ));
        DB::table('kecamatan')->insert(array (
            0 => 
            array (
                'id_kecamatan' => '9502',
                'id_kabupaten' => '950234',
                'nama_kecamatan' => 'Nongme',
            ),
            1 => 
            array (
                'id_kecamatan' => '9503',
                'id_kabupaten' => '950351',
                'nama_kecamatan' => 'Sumo',
            ),
            2 => 
            array (
                'id_kecamatan' => '9504',
                'id_kabupaten' => '950446',
                'nama_kecamatan' => 'Yuko',
            ),
            3 => 
            array (
                'id_kecamatan' => '9505',
                'id_kabupaten' => '950505',
                'nama_kecamatan' => 'Ilugwa',
            ),
            4 => 
            array (
                'id_kecamatan' => '9506',
                'id_kabupaten' => '950605',
                'nama_kecamatan' => 'Welarek',
            ),
            5 => 
            array (
                'id_kecamatan' => '9507',
                'id_kabupaten' => '950739',
                'nama_kecamatan' => 'Melagi',
            ),
            6 => 
            array (
                'id_kecamatan' => '9508',
                'id_kabupaten' => '950832',
                'nama_kecamatan' => 'Pasir Putih',
            ),
            7 => 
            array (
                'id_kecamatan' => '9601',
                'id_kabupaten' => '960130',
                'nama_kecamatan' => 'Sayosa Timur',
            ),
            8 => 
            array (
                'id_kecamatan' => '9602',
                'id_kabupaten' => '960215',
                'nama_kecamatan' => 'Kais Darat',
            ),
            9 => 
            array (
                'id_kecamatan' => '9603',
                'id_kabupaten' => '960324',
                'nama_kecamatan' => 'Batanta Selatan',
            ),
            10 => 
            array (
                'id_kecamatan' => '9604',
                'id_kabupaten' => '960429',
                'nama_kecamatan' => 'Selemkai',
            ),
            11 => 
            array (
                'id_kecamatan' => '9605',
                'id_kabupaten' => '960524',
                'nama_kecamatan' => 'Mare Selatan',
            ),
            12 => 
            array (
                'id_kecamatan' => '9671',
                'id_kabupaten' => '967110',
                'nama_kecamatan' => 'Maladum Mes',
            ),
        ));
        
        
    }
}