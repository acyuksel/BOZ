<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Models\Medium;

class RecommendationMediaIsPicture implements Rule
{

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $medium = Medium::find($value);
        if ($medium == null)
            return true;

        $extensions = array("png", "jpeg", "jpg");
        if (in_array($medium->extension, $extensions))
            return true;

        return false;

    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return __('validation.custom.recommendation');
    }
}
