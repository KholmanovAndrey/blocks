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
        'size',
        'gost',
        'weight',
        'endurance',
        'frost',
        'thermal',
        'density',
        'pallet',
        'square',
        'cube',
        'packaging',
        'soundproofing',
        'meta_title',
        'meta_keywords',
        'meta_description',
    ];

    public static function rules()
    {
        return [
            'name' => 'required|string|min:3|max:150',
            'title' => 'required|string|min:3|max:150',
            'size' => 'required|string',
            'gost' => 'required|string',
            'weight' => 'required|string',
            'endurance' => 'required|string',
            'frost' => 'required|string',
            'thermal' => 'required|string',
            'density' => 'required|string',
            'pallet' => 'required|string',
            'square' => 'required|string',
            'cube' => 'required|string',
            'packaging' => 'required|string',
            'soundproofing' => 'nullable|string',
            'image' => 'required|string',
        ];
    }

    public function product_types()
    {
        return $this->hasMany(ProductType::class, 'product_id', 'id');
    }
}
