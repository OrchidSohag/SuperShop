<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable = [
        'customer_id', 'product_id', 'quantity', 'total_amount', 'paid_amount', 'due_amount', 'created_at', 'updated_at'
    ];

    public function product()
    {
        return $this->belongsTo('App\Models\Product','product_id');
    }

    public function customer()
    {
        return $this->belongsToMany('App\Models\Customer','customers');
    }
}
