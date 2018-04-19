<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\DB;


class ValidCategory implements Rule
{
    protected $allowed = ['null', 'NULL', '!null', '!NULL'];


    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $in_db = DB::table('categories')->where('id', $value)->exists();
        $exists = in_array($value, $this->allowed);

        if($in_db || $exists){
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
        return 'Invalid CATEGORY input';
    }

}
