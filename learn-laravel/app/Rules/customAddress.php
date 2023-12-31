<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class customAddress implements Rule
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
        // ----- Custom VAlidation for Standard Address -------
        $regex = '/^[a-zA-Z0-9\s\.,#-]+$/';
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
        return 'Please enter a valid address.';
    }
}
