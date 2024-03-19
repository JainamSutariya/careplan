<?php

namespace App\Helpers;

class CheckboxHelper
{
    public static function isChecked($value, $checkedValues)
    {
        if (is_array($checkedValues)) {
            return in_array($value, $checkedValues);
        }
        return false;
    }
}
