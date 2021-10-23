<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable 
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';
    protected $fillable = [
        'username',
        'email',
        'password',
        'role',
        'token',
        'is_active'
    ];

    public function lelangan()
    {
        return $this->hasMany(Lelangan::class);
    }

    public function bid()
    {
        return $this->hasMany(Bid::class);
    }
    public function pengaduan()
    {
        return $this->hasMany(Pengaduan::class);
    }
    public function chat()
    {
        return $this->hasMany(Chat::class);
    }


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
