<?php

namespace Modules\User\Entities\V1\User;

use Modules\Base\Entities\V1\Fields\BaseFields\BaseFields;

class UserFields extends BaseFields
{
    public const ID                    = 'id';
    public const MOBILE                = 'mobile';
    public const EMAIL                 = 'email';
    public const FIRTSNAME             = 'firstname';
    public const LASTNAME              = 'lastname';
    public const PASSWORD              = 'password';
    public const PASSWORD_CONFIRMATION = self::PASSWORD . '_confirmation';
    public const MOBILE_VERIFIED_AT    = 'mobile_verified_at';
    public const EMAIL_VERIFIED_AT     = 'email_verified_at';
    public const ROLE                  = 'role';
}
