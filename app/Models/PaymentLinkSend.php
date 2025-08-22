<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class PaymentLinkSend extends Model
{
     protected $fillable = [
        'participant_registration_id','participant_registration_uuid','send_by','field_visit_registration_id',
        'field_visit_registration_uuid','exhibition_regestration_id','exhibition_regestration_uuid','link',
        'price','category_type','currancy','link_send_date_time','expired_date_time','uuid','status'
    ];

    public function payments()
    {
        return $this->hasMany(Payment::class, 'payment_link_send_id');
    }

    public function LinkSendAtFormatted(): Attribute
    {
        return Attribute::make(
            get: fn () => Carbon::parse($this->link_send_date_time)->format('M d, Y, g:i A')
        );
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->uuid = (string) Str::uuid();
        });
    }
}
