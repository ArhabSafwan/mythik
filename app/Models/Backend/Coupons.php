<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Coupons extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'code',
        'discount',
        'expires_at',
        'status',
        'type',
    ];
}
