<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey = 'ProductID';

    protected $fillable = [
        'ProductName',
        'Description',
        'CategoryID',
        'Barcode',
        'Expiredate',
        'Qty',
        'UnitPriceIn',
        'UnitPriceOut',
        'ProductImage',
        'isDeleted'
    ];

    public function category()
    {
        return $this->belongsTo(
            Category::class,
            'CategoryID'
        );
    }
}
