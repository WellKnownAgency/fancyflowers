<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Zip implements Rule
{
    private $values = ['08002', '08003', '08007', '08009', '08021', '08026', '08033', '08034', '08035', '08043', '08049', '08053', '08055', '08083', '08084'];
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
        $valueStr = strval($value);
        return in_array($valueStr, $this->values);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Unfotunatelly we do not serve this area.';
    }
}
