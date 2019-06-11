<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'product_id', 'stock_quantity', 'alarm_quantity', 'created_at', 'updated_at'
    ];

    public function purchase()
    {
        return $this->belongsTo('App\Models\Purchase','product_id');
    }

    public function sale()
    {
        return $this->hasMany('App\Models\Sale','product_id');
    }
}
