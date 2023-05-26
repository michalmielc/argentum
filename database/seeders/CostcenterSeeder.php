<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Costcenter;

class CostcenterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void

    {
        // ALTERNATYWNY SEED LOSOWE COST CENTER
        // Costcenter::factory()->count(2000)->create();

        $csvFile = database_path('seeders/costcenters.csv');
        $data = HelperSeeder::csvToArray($csvFile);
        DB::table('costcenters')->insert($data);
    }



}

