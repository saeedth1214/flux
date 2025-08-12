<?php

namespace Modules\User\Fields;

final class SessionFields
{
    /**
     * table name
     */
    public const _TABLE = 'sessions';

    /**
     * fillables columns
     */

    public const _ID = 'id';
    public const _IP_ADDRESS = 'ip_address';
    public const _USER_AGENT = 'user_agent';
    public const _PAYLOAD = 'payload';
    public const _LAST_ACTIVITY = 'last_activity';
    public const _USER_ID = 'user_id';
}
