<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class PhoneNumberRange implements Rule
{
    public function passes($attribute, $value)
    {
        // Check if the phone number is numeric
        if (!preg_match('/^\d+$/', $value)) {
            return false;
        }

        $number = (int) $value;

        // Validate the number against the allowed ranges
        return ($number >= 61000001 && $number <= 65999999) ||
               ($number >= 71000001 && $number <= 71999999);
    }

    public function message()
    {
        return 'The :attribute must be a valid phone number within the specified ranges.';
    }
}
