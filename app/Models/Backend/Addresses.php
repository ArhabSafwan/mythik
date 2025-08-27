<?php

namespace App\Models\Backend;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Addresses extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'name',
        'email',
        'phone',
        'city',
        'state',
        'postal_code',
        'country',
        'address_line',
        'address_type',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
