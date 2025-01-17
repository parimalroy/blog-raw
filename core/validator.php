<?php

namespace core;

class Validator
{
    public static function length($value, $min = 5, $max = INF)
    {
        $value = trim($value);

        return $value = strlen($value) > $min && strlen($value) <= $max;
    }

    public static function string($value, $min = 5, $max = INF)
    {
        $value = trim($value);

        return strlen($value) >= $min && strlen($value) <= $max;
    }

    public static function email($value)
    {
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }
}