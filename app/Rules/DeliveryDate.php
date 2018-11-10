<?php

namespace App\Rules;

use Carbon\Carbon;
use Illuminate\Contracts\Validation\Rule;

class DeliveryDate implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $current = Carbon::now();
        $check_date = Carbon::now()->setTime(12, 0, 0);
        $input_date = Carbon::parse($value)->setTime($current->hour, $current->minute, $current->second);
        if ($input_date->lessThanOrEqualTo($check_date)) {
            return true;
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Same day delivery is acceptable till 12.00 p.m. only';
    }
}
