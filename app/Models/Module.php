<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Module extends Model
{
    protected $fillable = ['name','slug'];

    public function permissions()
    {
        return $this->hasMany(Permission::class);
    }

    public function scopeOrderByDescId($query)
    {
        return $query->orderByDesc('id');
    }
    public function scopeOrderByAscId($query)
    {
        return $query->orderBy('id', 'asc');
    }
    public function CreatedAtFormatted(): Attribute
    {
        return Attribute::make(
            get: fn () => Carbon::parse($this->created_at)->format('M d, Y, g:i A')
        );
    }
    public function UpdatedAtFormatted(): Attribute
    {
        return Attribute::make(
            get: fn () => Carbon::parse($this->updated_at)->format('M d, Y, g:i A')
        );
    }

    public function scopeFilter(Builder $query, array $filters): Builder
    {
        return $query->when(
            $filters['name'] ?? false,
            function ($query, $value) {
                $query->where(function ($query) use ($value) {
                    $query->where('name', 'like', '%' . $value . '%');
                });
            }
        );
    }
    public function scopePermissionFilter(Builder $query, array $filters): Builder
    {
        return $query->when(
            $filters['name'] ?? false,
            function ($query, $value) {
                $query->where(function ($query) use ($value) {
                    $query->where('name', 'like', '%' . $value . '%');
                })->orWhereHas('permissions', function ($query) use ($value) {
                    $query->where('name', 'like', '%' . $value . '%');
                });
            }
        );
    }
}
