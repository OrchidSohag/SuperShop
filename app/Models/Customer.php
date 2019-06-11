<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'customer_name', 'mobile_number', 'address', 'image', 'created_at', 'updated_at'
    ];
    public function sale()
    {
        return $this->belongsToMany('App\Models\Sale','sales');
    }
}
