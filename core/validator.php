<?php
class Validator
{
    public static function length($value, $min = 1, $max = INF)
    {
        $value = trim($value);

        return $value = strlen($value) >= 1 && strlen($value) <= $max;
    }
}