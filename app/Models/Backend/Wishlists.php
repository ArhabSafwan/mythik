<?php

namespace App\Models\Backend;

use App\Models\User;
use App\Models\Backend\Products;
use Illuminate\Database\Eloquent\Model;

class Wishlists extends Model
{
    protected $fillable = [
        'user_id',
        'product_id',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function product()
    {
        return $this->belongsTo(Products::class, 'product_id');
    }
}
