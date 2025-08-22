<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RegistrationApprovedEmailLog extends Model
{
    protected $fillable = ['to','subject','status','error_message','mailable_type','mail_type'];
}
