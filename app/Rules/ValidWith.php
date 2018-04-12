<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;


class ValidWith implements Rule
{
    protected $allowed = ['tags', 'ingredients', 'category'];


    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        if(!empty($value)){
            $inputs = explode(',', $value);
            foreach ($inputs as $input) {
                $exists = in_array($input, $this->allowed);
                if(!$exists){
                    return false;
                }
            }
            return true;

        }
        return false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Invalid input WITH';
    }

}
