<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KriteriaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('kriteria')->delete();
        
        \DB::table('kriteria')->insert(array (
            0 => 
            array (
                'id' => 5,
                'bobot' => 40,
                'jenis' => 'Cost',
                'nama' => 'Biaya',
                'slug' => 'biaya',
                'kode' => 'C1',
                'satuan' => 'Rupiah',
                'dari' => 0,
                'sampai' => 750000000,
                'created_at' => '2023-07-07 16:37:47',
                'updated_at' => '2023-07-07 17:14:45',
            ),
            1 => 
            array (
                'id' => 6,
                'bobot' => 25,
                'jenis' => 'Benefit',
                'nama' => 'Jarak',
                'slug' => 'jarak',
                'kode' => 'C2',
                'satuan' => 'KM',
                'dari' => 0,
                'sampai' => 20,
                'created_at' => '2023-07-07 16:38:08',
                'updated_at' => '2023-07-07 17:15:58',
            ),
            2 => 
            array (
                'id' => 7,
                'bobot' => 20,
                'jenis' => 'Benefit',
                'nama' => 'Air',
                'slug' => 'air',
                'kode' => 'C3',
                'satuan' => 'Sumber',
                'dari' => 0,
                'sampai' => 4,
                'created_at' => '2023-07-07 16:42:20',
                'updated_at' => '2023-07-07 17:17:24',
            ),
            3 => 
            array (
                'id' => 8,
                'bobot' => 15,
                'jenis' => 'Benefit',
                'nama' => 'Tanah',
                'slug' => 'tanah',
                'kode' => 'C4',
                'satuan' => 'Kontur Kategori',
                'dari' => 1,
                'sampai' => 4,
                'created_at' => '2023-07-07 17:08:56',
                'updated_at' => '2023-07-07 17:18:34',
            ),
        ));
        
        
    }
}