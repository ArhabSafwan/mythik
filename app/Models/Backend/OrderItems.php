<?php

namespace App\Models\Backend;

use App\Models\Backend\Orders;
use App\Models\Backend\Products;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderItems extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'order_id',
        'product_id',
        'quantity',
        'price',
    ];
    public function order()
    {
        return $this->belongsTo(Orders::class, 'order_id');
    }
    public function product()
    {
        return $this->belongsTo(Products::class, 'product_id');
    }
}
