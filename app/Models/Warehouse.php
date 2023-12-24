<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    use HasFactory;

    protected $table = 'warehouses';

    protected $fillable = [
        'product_id',
        'material_id',
        'remainder',
        'quantity'
    ];

    public function material()
    {
        return $this->belongsTo(Material::class);
    }
}
