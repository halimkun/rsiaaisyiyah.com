<?php

namespace App\Helpers;

class Setting
{

    public static function get($key)
    {
        $data = \App\Models\Settings::find($key);
        return $data;
    }
}
