<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Products extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'title',
        'slug',
        'description',
        'price',
        'stock',
        'category_id',
        'image',
        'status',
    ];
    public function category()
    {
        return $this->belongsTo(Categories::class, 'category_id');
    }

}
