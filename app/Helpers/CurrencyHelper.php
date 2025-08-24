<?php

namespace App\Helpers;

class CurrencyHelper
{
    public static function convertToBDT($amount, $currency)
    {
        $rate = [
            'USD' => 122.90,
            'BDT' => 1,
        ];

        return round($amount * ($rate[$currency] ?? 1), 2);
    }
}