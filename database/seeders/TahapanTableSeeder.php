<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TahapanTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tahapan')->delete();
        
        \DB::table('tahapan')->insert(array (
            0 => 
            array (
                'id' => 1,
            'nama' => 'Seleksi Tahap Awal (Administrasi)',
                'kode' => 'B1',
                'bobot' => 35.0,
                'import_id' => 1,
                'created_at' => '2023-05-31 16:51:56',
                'updated_at' => '2023-05-31 16:51:56',
            ),
            1 => 
            array (
                'id' => 2,
            'nama' => 'Seleksi Computer Assisted Test (Tahapan test tulis)',
                'kode' => 'B2',
                'bobot' => 35.0,
                'import_id' => 1,
                'created_at' => '2023-05-31 16:51:56',
                'updated_at' => '2023-05-31 16:51:56',
            ),
            2 => 
            array (
                'id' => 3,
            'nama' => 'Seleksi Test Wawancara (tahapan terakhir)',
                'kode' => 'B3',
                'bobot' => 30.0,
                'import_id' => 1,
                'created_at' => '2023-05-31 16:51:56',
                'updated_at' => '2023-05-31 16:51:56',
            ),
        ));
        
        
    }
}