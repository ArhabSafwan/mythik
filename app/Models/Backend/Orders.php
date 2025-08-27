<?php

namespace App\Models\Backend;

use App\Models\User;
use App\Models\Backend\Addresses;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Orders extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'user_id',
        'total_amount',
        'status',
        'payment_method',
        'payment_status',
        'shipping_address_id',
        'billing_address_id',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function shippingAddress()
    {
        return $this->belongsTo(Addresses::class, 'shipping_address_id');
    }
    public function billingAddress()
    {
        return $this->belongsTo(Addresses::class, 'billing_address_id');
    }

}
