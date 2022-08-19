<?php
namespace App\Services\MoneyConvertor;
class AmountConvertor
{
    const USA = 33.20;
    const EURO = 40.20;
    const RUB = 0.20;

    public static function convert(float $from, float $to) : float
    {
        return $from * $to;
    }

}