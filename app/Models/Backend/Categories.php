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
        'parent_id',
    ];

    public function parent()
    {
        return $this->belongsTo(Categories::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Categories::class, 'parent_id');
    }

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
