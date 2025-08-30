<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categories extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name',
        'image',
        'slug',
    ];

    public function products()
    {
        return $this->hasMany(Products::class, 'category_id');
    }

    protected static function booted()
    {
        static::deleting(function ($category) {
            foreach ($category->products as $product) {
                $product->delete();
            }
        });
    }
}
