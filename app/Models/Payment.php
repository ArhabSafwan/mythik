<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = ['participant_invitation_id','participant_invitation_uuid','field_visit_invitation_id',
    'field_visit_invitation_uuid','exhibition_invitation_id','exhibition_invitation_uuid','order_id',
    'transaction_id','amount','currency','main_amount','status','main_currency','full_name','email','phone',
    'nationality','term_condition','payment_link_send_id','payment_link_send_uuid','experied_status'
    ];
}
