<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Storageplace extends Model
{
    use HasFactory;


    public $timestamps = false;

    protected $fillable = [

        'barcode',
        'stillageNo',
        'shelfNo',
        'storageplacePlaceNo',
        'placeNo',
        'maxHeight',
        'maxWeight',
        'lane',
        'name',
        'accessTime',
        'isActive',
        'onlySingle',
        'maxAmountOfItems'
    ];
}
