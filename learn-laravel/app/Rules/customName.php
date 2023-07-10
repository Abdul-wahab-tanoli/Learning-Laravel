<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class customName implements Rule
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
    {   //----will accetp names with in  between spaceand avoid consective
        $regex = '/^[a-zA-Z]+(?:\s[a-zA-Z]+)*$/';
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
        return 'Name Must be concist of Alphabets only and  no consective spaces allowed';
    }
}
