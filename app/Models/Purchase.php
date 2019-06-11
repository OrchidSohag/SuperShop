<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $fillable = [
        'product_name', 'supplier', 'unit_price', 'total_amount', 'created_at', 'updated_at'
    ];

    public function product()
    {
        return $this->hasOne('App\Models\Product','product_id');
    }
}
