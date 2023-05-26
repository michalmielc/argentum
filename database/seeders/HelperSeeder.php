<?php
namespace Database\Seeders;

class HelperSeeder
{

    // funkcja wczytująca plik csv
    public static function csvToArray($file)
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

