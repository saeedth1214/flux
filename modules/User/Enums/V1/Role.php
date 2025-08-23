<?php

namespace Modules\User\Enums\V1;

use Modules\Support\Traits\V1\CleanEnum\CleanEnum;

enum Role: int
{
    use CleanEnum;
    
    case Admin = 0;
}
