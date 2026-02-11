<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Ramsey\Collection\Collection;

class Furniture extends Model
{
    /** @use HasFactory<\Database\Factories\FurnitureFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'color',
        'category',
        'price',
        'image',
    ];
}
