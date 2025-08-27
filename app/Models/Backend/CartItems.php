<?php

namespace App\Models\Backend;

use App\Models\User;
use App\Models\Backend\Products;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CartItems extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'user_id',
        'session_id',
        'product_id',
        'quantity',
        'price',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function product()
    {
        return $this->belongsTo(Products::class);
    }
}
