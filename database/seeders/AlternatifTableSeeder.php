<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AlternatifTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('alternatif')->delete();
        
        \DB::table('alternatif')->insert(array (
            0 => 
            array (
                'id' => 51,
                'nama' => 'Graha Bukit Raya 1',
                'slug' => 'graha-bukit-raya-1',
                'alamat' => NULL,
                'deskripsi' => NULL,
                'import_id' => 21,
                'created_at' => '2023-07-07 17:21:20',
                'updated_at' => '2023-07-07 17:21:20',
            ),
            1 => 
            array (
                'id' => 52,
                'nama' => 'Graha Bukit Raya 2',
                'slug' => 'graha-bukit-raya-2',
                'alamat' => NULL,
                'deskripsi' => NULL,
                'import_id' => 21,
                'created_at' => '2023-07-07 17:21:20',
                'updated_at' => '2023-07-07 17:21:20',
            ),
            2 => 
            array (
                'id' => 53,
                'nama' => 'Graha Bukit Raya 3',
                'slug' => 'graha-bukit-raya-3',
                'alamat' => NULL,
                'deskripsi' => NULL,
                'import_id' => 21,
                'created_at' => '2023-07-07 17:21:20',
                'updated_at' => '2023-07-07 17:21:20',
            ),
            3 => 
            array (
                'id' => 54,
                'nama' => 'Permata',
                'slug' => 'permata',
                'alamat' => NULL,
                'deskripsi' => NULL,
                'import_id' => 21,
                'created_at' => '2023-07-07 17:21:20',
                'updated_at' => '2023-07-07 17:21:20',
            ),
            4 => 
            array (
                'id' => 55,
                'nama' => 'Cilame Indah',
                'slug' => 'cilame-indah',
                'alamat' => NULL,
                'deskripsi' => NULL,
                'import_id' => 21,
                'created_at' => '2023-07-07 17:21:20',
                'updated_at' => '2023-07-07 17:21:20',
            ),
            5 => 
            array (
                'id' => 56,
                'nama' => 'Bumi Pakusarakan',
                'slug' => 'bumi-pakusarakan',
                'alamat' => NULL,
                'deskripsi' => NULL,
                'import_id' => 21,
                'created_at' => '2023-07-07 17:21:20',
                'updated_at' => '2023-07-07 17:21:20',
            ),
            6 => 
            array (
                'id' => 57,
                'nama' => 'Tanimulya',
                'slug' => 'tanimulya',
                'alamat' => NULL,
                'deskripsi' => NULL,
                'import_id' => 21,
                'created_at' => '2023-07-07 17:21:20',
                'updated_at' => '2023-07-07 17:21:20',
            ),
            7 => 
            array (
                'id' => 58,
                'nama' => 'Rawa Family',
                'slug' => 'rawa-family',
                'alamat' => NULL,
                'deskripsi' => NULL,
                'import_id' => 21,
                'created_at' => '2023-07-07 17:21:20',
                'updated_at' => '2023-07-07 17:21:20',
            ),
            8 => 
            array (
                'id' => 59,
                'nama' => 'Suka Maju',
                'slug' => 'suka-maju',
                'alamat' => NULL,
                'deskripsi' => NULL,
                'import_id' => 21,
                'created_at' => '2023-07-07 17:21:20',
                'updated_at' => '2023-07-07 17:21:20',
            ),
            9 => 
            array (
                'id' => 60,
                'nama' => 'Taman Bunga',
                'slug' => 'taman-bunga',
                'alamat' => NULL,
                'deskripsi' => NULL,
                'import_id' => 21,
                'created_at' => '2023-07-07 17:21:20',
                'updated_at' => '2023-07-07 17:21:20',
            ),
        ));
        
        
    }
}