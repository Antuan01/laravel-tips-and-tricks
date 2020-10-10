<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'price_d', 'price_s', 'weight', 'weight_unit', 'height', 'height_unit', 'status', 'code'];

    public const status = [
        'DISABLED' => 0,
        'ENABLED' => 1, 
    ];

    public const height_unit = [
        'M' => 1,
        'CM' => 2
    ];

    public const weight_unit = [
        'KG' => 1,
        'G' => 2, 
    ];
}
