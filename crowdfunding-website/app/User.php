<?php

namespace App;

use App\Services\HashUuid;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class User extends Authenticatable
{
    use Notifiable, HashUuid;

    public function getIncrementing()
    {
        return false;
    }

    public function getKeyType()
    {
        return 'string';
    }
    public function getRouteKeyName()
    {
        return 'id';
    }

    protected $fillable = [
        'role_id',
        'name',
        'email',
        'username',
        'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id', 'id')->withDefault(
            [
                'name' => 'Not Admin'
            ]
        );
    }

    public function isSuperAdmin()
    {
        return $this->role->name == 'Super Admin' ?? false;
    }
}
