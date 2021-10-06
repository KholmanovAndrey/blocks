<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'product_id',
        'type',
        'price',
    ];

    public static function rules()
    {
        $tableProduct = (new Product())->getTable();
        return [
            'product_id' => "required|exists:{$tableProduct},id",
            'type' => 'required|min:3|max:50',
            'price' => 'required',
        ];
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
