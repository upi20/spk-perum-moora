<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KriteriaNilaiTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('kriteria_nilai')->delete();
        
        \DB::table('kriteria_nilai')->insert(array (
            0 => 
            array (
                'id' => 19,
                'kriteria_id' => 5,
                'nama' => 'Murah',
                'nilai' => 100,
                'dari' => 0,
                'sampai' => 149999999,
                'created_at' => '2023-07-07 17:10:23',
                'updated_at' => '2023-07-07 17:13:58',
            ),
            1 => 
            array (
                'id' => 20,
                'kriteria_id' => 5,
                'nama' => 'Cukup Murah',
                'nilai' => 80,
                'dari' => 150000000,
                'sampai' => 299999999,
                'created_at' => '2023-07-07 17:10:52',
                'updated_at' => '2023-07-07 17:14:09',
            ),
            2 => 
            array (
                'id' => 21,
                'kriteria_id' => 5,
                'nama' => 'Normal',
                'nilai' => 60,
                'dari' => 300000000,
                'sampai' => 449999999,
                'created_at' => '2023-07-07 17:11:10',
                'updated_at' => '2023-07-07 17:14:20',
            ),
            3 => 
            array (
                'id' => 22,
                'kriteria_id' => 5,
                'nama' => 'Cukup Mahal',
                'nilai' => 40,
                'dari' => 450000000,
                'sampai' => 599999999,
                'created_at' => '2023-07-07 17:11:27',
                'updated_at' => '2023-07-07 17:14:35',
            ),
            4 => 
            array (
                'id' => 23,
                'kriteria_id' => 5,
                'nama' => 'Mahal',
                'nilai' => 20,
                'dari' => 600000000,
                'sampai' => 750000000,
                'created_at' => '2023-07-07 17:11:45',
                'updated_at' => '2023-07-07 17:14:45',
            ),
            5 => 
            array (
                'id' => 24,
                'kriteria_id' => 6,
                'nama' => 'Sangat baik',
                'nilai' => 100,
                'dari' => 0,
                'sampai' => 4,
                'created_at' => '2023-07-07 17:12:52',
                'updated_at' => '2023-07-07 17:15:06',
            ),
            6 => 
            array (
                'id' => 25,
                'kriteria_id' => 6,
                'nama' => 'Cukup baik',
                'nilai' => 75,
                'dari' => 5,
                'sampai' => 9,
                'created_at' => '2023-07-07 17:15:24',
                'updated_at' => '2023-07-07 17:15:24',
            ),
            7 => 
            array (
                'id' => 26,
                'kriteria_id' => 6,
                'nama' => 'Baik',
                'nilai' => 50,
                'dari' => 10,
                'sampai' => 14,
                'created_at' => '2023-07-07 17:15:41',
                'updated_at' => '2023-07-07 17:15:41',
            ),
            8 => 
            array (
                'id' => 27,
                'kriteria_id' => 6,
                'nama' => 'Cukup',
                'nilai' => 25,
                'dari' => 15,
                'sampai' => 20,
                'created_at' => '2023-07-07 17:15:58',
                'updated_at' => '2023-07-07 17:15:58',
            ),
            9 => 
            array (
                'id' => 28,
                'kriteria_id' => 7,
                'nama' => 'Banyak',
                'nilai' => 100,
                'dari' => 4,
                'sampai' => 4,
                'created_at' => '2023-07-07 17:16:37',
                'updated_at' => '2023-07-07 17:16:37',
            ),
            10 => 
            array (
                'id' => 29,
                'kriteria_id' => 7,
                'nama' => 'Cukup',
                'nilai' => 75,
                'dari' => 3,
                'sampai' => 3,
                'created_at' => '2023-07-07 17:16:53',
                'updated_at' => '2023-07-07 17:16:53',
            ),
            11 => 
            array (
                'id' => 30,
                'kriteria_id' => 7,
                'nama' => 'Normal',
                'nilai' => 50,
                'dari' => 3,
                'sampai' => 3,
                'created_at' => '2023-07-07 17:17:07',
                'updated_at' => '2023-07-07 17:17:07',
            ),
            12 => 
            array (
                'id' => 31,
                'kriteria_id' => 7,
                'nama' => 'Susah',
                'nilai' => 25,
                'dari' => 0,
                'sampai' => 1,
                'created_at' => '2023-07-07 17:17:18',
                'updated_at' => '2023-07-07 17:17:24',
            ),
            13 => 
            array (
                'id' => 32,
                'kriteria_id' => 8,
                'nama' => 'Sesuai',
                'nilai' => 100,
                'dari' => 1,
                'sampai' => 1,
                'created_at' => '2023-07-07 17:17:58',
                'updated_at' => '2023-07-07 17:17:58',
            ),
            14 => 
            array (
                'id' => 33,
                'kriteria_id' => 8,
                'nama' => 'Cukup Sesuai',
                'nilai' => 75,
                'dari' => 2,
                'sampai' => 2,
                'created_at' => '2023-07-07 17:18:09',
                'updated_at' => '2023-07-07 17:18:09',
            ),
            15 => 
            array (
                'id' => 34,
                'kriteria_id' => 8,
                'nama' => 'Kurang Sesuai',
                'nilai' => 50,
                'dari' => 3,
                'sampai' => 3,
                'created_at' => '2023-07-07 17:18:21',
                'updated_at' => '2023-07-07 17:18:21',
            ),
            16 => 
            array (
                'id' => 35,
                'kriteria_id' => 8,
                'nama' => 'Buruk',
                'nilai' => 25,
                'dari' => 4,
                'sampai' => 4,
                'created_at' => '2023-07-07 17:18:34',
                'updated_at' => '2023-07-07 17:18:34',
            ),
        ));
        
        
    }
}