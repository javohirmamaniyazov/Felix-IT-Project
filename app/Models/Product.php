<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'product_name',
        'product_code'
    ];

    public function materials()
    {
        return $this->belongsToMany(Material::class, 'warehouses')
            ->withPivot('quantity', 'remainder', 'id')
            ->withTimestamps();
    }
}
