<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class customPassword implements Rule
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
        $regex = '/^(?=.*[A-Z])(?=.*\d)(?=.*[^A-Za-z0-9]).{8}$/';
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
        return 'The password must be 8 characters long and include at least one uppercase letter, one special character, and one number.';
    }
}
