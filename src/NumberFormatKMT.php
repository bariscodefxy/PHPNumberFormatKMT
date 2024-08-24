<?php
namespace PHPNumberFormatKMT;
class NumberFormatKMT
{
    public static function format(int $number, string $discriminator = ' ', int $precision = 1): string
    {
        if($number > 1000000000) return round($number / 1000000000, $precision) . $discriminator . "T";
        else if ($number > 1000000) return round($number / 1000000, $precision) . $discriminator . "M";
        else if($number > 1000) return round($number / 1000, $precision) . $discriminator . "K";
        return (string)$number;
    }
}