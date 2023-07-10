<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class customCNIC implements Rule
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
    {   //------ Custom Validator For Validating Pakistani CNIC -----------
        $regex = '/^\d{5}-\d{7}-\d$/';
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
        return 'Please enter a valid Pakistani CNIC number in the format XXXXX-XXXXXXX-X.';
    }
}
