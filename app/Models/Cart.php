<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = ['user_id', 'furniture_id'];

    public function furniture()
    {
        return $this->belongsTo(Furniture::class);
    }
}
