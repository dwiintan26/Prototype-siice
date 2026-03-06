<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProvinsiTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('provinsi')->delete();
        
        \DB::table('provinsi')->insert(array (
            0 => 
            array (
                'id_provinsi' => '11',
                'nama_provinsi' => 'Aceh',
            ),
            1 => 
            array (
                'id_provinsi' => '12',
                'nama_provinsi' => 'Sumatera Utara',
            ),
            2 => 
            array (
                'id_provinsi' => '13',
                'nama_provinsi' => 'Sumatera Barat',
            ),
            3 => 
            array (
                'id_provinsi' => '14',
                'nama_provinsi' => 'Riau',
            ),
            4 => 
            array (
                'id_provinsi' => '15',
                'nama_provinsi' => 'Jambi',
            ),
            5 => 
            array (
                'id_provinsi' => '16',
                'nama_provinsi' => 'Sumatera Selatan',
            ),
            6 => 
            array (
                'id_provinsi' => '17',
                'nama_provinsi' => 'Bengkulu',
            ),
            7 => 
            array (
                'id_provinsi' => '18',
                'nama_provinsi' => 'Lampung',
            ),
            8 => 
            array (
                'id_provinsi' => '19',
                'nama_provinsi' => 'Kepulauan Bangka Belitung',
            ),
            9 => 
            array (
                'id_provinsi' => '21',
                'nama_provinsi' => 'Kepulauan Riau',
            ),
            10 => 
            array (
                'id_provinsi' => '31',
                'nama_provinsi' => 'Daerah Khusus Ibukota Jakarta',
            ),
            11 => 
            array (
                'id_provinsi' => '32',
                'nama_provinsi' => 'Jawa Barat',
            ),
            12 => 
            array (
                'id_provinsi' => '33',
                'nama_provinsi' => 'Jawa Tengah',
            ),
            13 => 
            array (
                'id_provinsi' => '34',
                'nama_provinsi' => 'Daerah Istimewa Yogyakarta',
            ),
            14 => 
            array (
                'id_provinsi' => '35',
                'nama_provinsi' => 'Jawa Timur',
            ),
            15 => 
            array (
                'id_provinsi' => '36',
                'nama_provinsi' => 'Banten',
            ),
            16 => 
            array (
                'id_provinsi' => '51',
                'nama_provinsi' => 'Bali',
            ),
            17 => 
            array (
                'id_provinsi' => '52',
                'nama_provinsi' => 'Nusa Tenggara Barat',
            ),
            18 => 
            array (
                'id_provinsi' => '53',
                'nama_provinsi' => 'Nusa Tenggara Timur',
            ),
            19 => 
            array (
                'id_provinsi' => '61',
                'nama_provinsi' => 'Kalimantan Barat',
            ),
            20 => 
            array (
                'id_provinsi' => '62',
                'nama_provinsi' => 'Kalimantan Tengah',
            ),
            21 => 
            array (
                'id_provinsi' => '63',
                'nama_provinsi' => 'Kalimantan Selatan',
            ),
            22 => 
            array (
                'id_provinsi' => '64',
                'nama_provinsi' => 'Kalimantan Timur',
            ),
            23 => 
            array (
                'id_provinsi' => '65',
                'nama_provinsi' => 'Kalimantan Utara',
            ),
            24 => 
            array (
                'id_provinsi' => '71',
                'nama_provinsi' => 'Sulawesi Utara',
            ),
            25 => 
            array (
                'id_provinsi' => '72',
                'nama_provinsi' => 'Sulawesi Tengah',
            ),
            26 => 
            array (
                'id_provinsi' => '73',
                'nama_provinsi' => 'Sulawesi Selatan',
            ),
            27 => 
            array (
                'id_provinsi' => '74',
                'nama_provinsi' => 'Sulawesi Tenggara',
            ),
            28 => 
            array (
                'id_provinsi' => '75',
                'nama_provinsi' => 'Gorontalo',
            ),
            29 => 
            array (
                'id_provinsi' => '76',
                'nama_provinsi' => 'Sulawesi Barat',
            ),
            30 => 
            array (
                'id_provinsi' => '81',
                'nama_provinsi' => 'Maluku',
            ),
            31 => 
            array (
                'id_provinsi' => '82',
                'nama_provinsi' => 'Maluku Utara',
            ),
            32 => 
            array (
                'id_provinsi' => '91',
                'nama_provinsi' => 'Papua',
            ),
            33 => 
            array (
                'id_provinsi' => '92',
                'nama_provinsi' => 'Papua Barat',
            ),
            34 => 
            array (
                'id_provinsi' => '93',
                'nama_provinsi' => 'Papua Selatan',
            ),
            35 => 
            array (
                'id_provinsi' => '94',
                'nama_provinsi' => 'Papua Tengah',
            ),
            36 => 
            array (
                'id_provinsi' => '95',
                'nama_provinsi' => 'Papua Pegunungan',
            ),
            37 => 
            array (
                'id_provinsi' => '96',
                'nama_provinsi' => 'Papua Barat Daya',
            ),
        ));
        
        
    }
}