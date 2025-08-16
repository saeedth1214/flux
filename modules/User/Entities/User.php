<?php

namespace Modules\User\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Modules\User\Fields\UserFields;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        UserFields::_FIRST_NAME,
        UserFields::_LAST_NAME,
        UserFields::_MOBILE,
        UserFields::_EMAIL,
        UserFields::_PASSWORD,
        UserFields::_ROLE,
    ];

    protected $hidden = [
        UserFields::_PASSWORD,
    ];

    protected function casts(): array
    {
        return [
            UserFields::_EMAIL_VERIFIED_AT => 'datetime',
            UserFields::_MOBILE_VERIFIED_AT => 'datetime',
            UserFields::_PASSWORD => 'hashed',
        ];
    }
}
