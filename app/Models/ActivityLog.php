<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActivityLog extends Model
{
    protected $fillable=[
        'status',
        'group',
        'activity_type',
        'message',
        'url',
        'user_id',
    ];

    public function creator() {
        return $this->belongsTo(User::class,'user_id');
    }
}
