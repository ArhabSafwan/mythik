<?php

namespace App\Models\Backend;

use App\Models\User;
use App\Models\Backend\Products;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductReviews extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'product_id',
        'user_id',
        'rating',
        'review',
    ];
    public function product()
    {
        return $this->belongsTo(Products::class, 'product_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
