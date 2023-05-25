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

        Costcenter::factory()->count(2000)->create();
    }



}

