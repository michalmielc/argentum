<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;


    public $timestamps = false;

    protected $fillable = [
        'name1',
        'name2',
        'name3',
        'barcode',
        'boxAmount',
        'minInv',
        'sizes',
        'weight',
        'picture',
        'isActive',
        'expiryDate',
        'isBlocked'
    ];
}

