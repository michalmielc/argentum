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
        $data = $this->csvToArray($csvFile);

        DB::table('suppliers')->insert($data);


        // DB::table('Suppliers')->insert([
        // [
        //     'name' => "Republic Services",
        //     'address' => "4740 Center Street Rochelle Park, New Jersey",
        //     'email' => "rep_ser@gmail.com"
        // ],
       
        //     'address' => "1820 Mapleview Drive Moon Lake, Florida",
        //     'email' => "info@dicounttire.com"
        // ],
        
       
        // ]);
    }


    private function csvToArray($file)
    {
        $csv = array_map('str_getcsv', file($file));
        $header = array_shift($csv);
        $data = [];

        foreach ($csv as $row) {
            $data[] = array_combine($header, $row);
        }

        return $data;
    }
}

