<?php

namespace App\Models;

use App\Enums\UserRole;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guarded = ['id'];

    protected $hidden = [
        'password',
    ];

    protected $casts = [
        'password' => 'hashed',
        'role' => UserRole::class,
    ];

    public function perusahaan(): HasOne
    {
        return $this->hasOne(Perusahaan::class);
    }

    public function pelamar(): HasOne
    {
        return $this->hasOne(Pelamar::class);
    }
}
