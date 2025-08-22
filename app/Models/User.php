<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name','email','password','user_name','phone','slug','role_id','user_type','status','photo','created_by','updated_by'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function scopeOnlyType2($query)
    {
        return $query->where('user_type', 2);
    }
    public function scopeOrderById($query, $direction = 'desc')
    {
        return $query->orderBy('id', $direction);
    }

    public function role():BelongsTo
    {
        return $this->belongsTo(Role::class);
    }

    public function hasPermissionRole($permission): bool
    {
        return $this->role->permissions()->where('name', $permission)->exists();
    }
}
