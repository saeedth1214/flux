<?php

namespace Modules\User\Fields;

final class ResetTokenFields
{
    /**
     * table name
     */
    public const _TABLE = 'password_reset_tokens';

    /**
     * fillables columns
     */
    public const _ID = 'id';
    public const _EMAIL = 'email';
    public const _TOKEN = 'token';
    public const _CREATED_AT = 'CREATED_AT';
    public const _PASSWORD = 'password';
    public const _ROLE = 'role';
}
