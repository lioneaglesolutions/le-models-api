<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Lioneagle\LeUtils\Traits\HasUuid;

class User extends Authenticatable
{
    use HasApiTokens,
        HasFactory,
        HasUuid,
        Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function addresses()
    {
        return $this->hasMany(Address::class);
    }
    public function address()
    {
        return $this->hasOne(Address::class)->latestOfMany();
    }
}
