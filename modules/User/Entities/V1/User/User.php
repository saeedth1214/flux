<?php

namespace Modules\User\Entities\V1\User;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Sanctum\HasApiTokens;
use Modules\Base\Entities\V1\BaseAuthenticatableModel;
use Modules\User\Database\Factories\V1\UserFactory\UserFactory;
use Spatie\Permission\Traits\HasRoles;

class User extends BaseAuthenticatableModel
{
    use HasApiTokens,
        HasFactory,
        UserModifiers,
        UserRelations,
        UserScopes,
        HasRoles;

    /**
     * Model guard name
     *
     * @var string
     */
    protected string $guard_name = 'web';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        UserFields::MOBILE,
        UserFields::EMAIL,
        UserFields::FIRTSNAME,
        UserFields::LASTNAME,
        UserFields::PASSWORD,
        UserFields::MOBILE_VERIFIED_AT,
        UserFields::EMAIL_VERIFIED_AT,
        UserFields::ROLE,
        UserFields::CREATED_AT,
        UserFields::UPDATED_AT,
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        UserFields::PASSWORD,
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
    ];

    /**
     * Get a new factory instance for the model.
     *
     * @param callable|array|int|null $count
     * @param callable|array          $state
     *
     * @return Factory<static>
     */
    public static function factory($count = null, $state = []): Factory
    {
        return UserFactory::new();
    }
}
