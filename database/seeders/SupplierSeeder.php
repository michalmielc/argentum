<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void

    {

        $csvFile = database_path('seeders/suppliers.csv');
        $data = HelperSeeder::csvToArray($csvFile);
        DB::table('suppliers')->insert($data);
    }


}

