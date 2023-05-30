<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StorageplaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void

    {

        $csvFile = database_path('seeders/storageplaces.csv');
        $data = HelperSeeder::csvToArray($csvFile);
        DB::table('storageplaces')->insert($data);
    }


}

