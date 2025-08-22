<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Permission extends Model
{
    protected $fillable = [
        'name','slug','module_id'
    ];

    public function roles():BelongsToMany
    {
        return $this->belongsToMany(Role::class)->withTimestamps();
    }

    public function modules():BelongsTo
    {
        return $this->belongsTo(Module::class,'module_id');
    }

    
}
