<?php

namespace Modules\Base\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class MobileNumberRule implements ValidationRule
{
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $value = preg_replace('/[^0-9]/', '', $value);

        if (preg_match('/^09[0-9]{9}$/', $value) === 1)
            $fail('The :attribute must be valid mobile.');
    }
}
