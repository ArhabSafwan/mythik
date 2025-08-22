<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Role extends Model
{
    protected $fillable = [
        'name','status','slug','delete_able'
    ];
  
    public function permissions():BelongsToMany
    {
        return $this->belongsToMany(Permission::class)->withTimestamps();
    }

    public function user():HasMany
    {
        return $this->hasMany(User::class)->withTimestamps();
    }
    public function scopeOrderById($query, $direction = 'desc')
    {
        return $query->orderBy('id', $direction);
    }
    public function scopeStatus($query, $status)
    {
        return $query->where('status', $status);
    }
}
