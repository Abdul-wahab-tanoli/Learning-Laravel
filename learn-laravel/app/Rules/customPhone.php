<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class customPhone implements Rule
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
    {   //---------- Regex for Validating Phone Number ---------
        $regex = '/^(\+92|0)3\d{2}(-|\s)?\d{7}$/';
        if (preg_match($regex, $value)) {
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
        return 'Please enter a valid phone number in the format +92XXXXXXXXXX or 03XXXXXXXXX.';
    }
}
