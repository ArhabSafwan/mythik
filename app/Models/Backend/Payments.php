<?php

namespace App\Models\Backend;

use App\Models\Backend\Orders;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payments extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'order_id',
        'payment_method',
        'payment_status',
        'transaction_id',
        'amount',
    ];
    public function order()
    {
        return $this->belongsTo(Orders::class, 'order_id');
    }
}
