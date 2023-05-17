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
        DB::table('Suppliers')->insert([
        [
            'name' => "Republic Services",
            'address' => "4740 Center Street Rochelle Park, New Jersey",
            'email' => "rep_ser@gmail.com"
        ],
        [
            'name' => "ASML Holding",
            'address' => "1823 Alpaca Way, Tustin, California",
            'email' => "rep_ser@gmail.com"
        ],
        
        [
            'name' => "Meb Management Services",
            'address' => "1500 Twin House Lane Mount Vernon, Missouri",
            'email' => "ord@mms-web-usa.com"
        ],
        
        [
            'name' => "Discount Tire",
            'address' => "1820 Mapleview Drive Moon Lake, Florida",
            'email' => "info@dicounttire.com"
        ],
        
        [
            'name' => "Microchip Technology",
            'address' => "2512 May Street Lexington, Kentucky",
            'email' => "micro@m-t.com"
        ]
        ]);
    }
}

