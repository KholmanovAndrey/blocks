<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'title',
        'description',
        'size',
        'weight',
        'endurance',
        'frost_resistance',
        'thermal_conductivity',
        'density',
        'pallet',
        'square',
        'cube',
        'packaging',
        'meta_title',
        'meta_keywords',
        'meta_description',
    ];

    public function product_types()
    {
        return $this->hasMany(ProductType::class, 'product_id', 'id');
    }
}
