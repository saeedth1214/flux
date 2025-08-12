<?php

namespace Modules\User\Fields;

final class UserFields
{
    /**
     * table name
     */
    public const _TABLE = 'users';

    /**
     * foreign key name for relation
     */
    public const _FOREIGN_KEY = 'user_id';

    /**
     * fillables columns
     */
    public const _ID = 'id';
    public const _NAME = 'name';
    public const _EMAIL = 'email';
    public const _EMAIL_VERIFIED_AT = 'email_verified_at';
    public const _PASSWORD = 'password';
    public const _ROLE = 'role';
}
