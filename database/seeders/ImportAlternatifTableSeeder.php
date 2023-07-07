<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ImportAlternatifTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('import_alternatif')->delete();
        
        \DB::table('import_alternatif')->insert(array (
            0 => 
            array (
                'id' => 21,
                'nama' => 'Data Testing',
                'slug' => 'data-testing',
                'file' => '20230707052120-data-testing.xlsx',
                'count' => 10,
                'created_at' => '2023-07-07 17:21:20',
                'updated_at' => '2023-07-07 17:21:20',
            ),
        ));
        
        
    }
}