<?php

namespace App\Services;

class TestService
{
    public static function getRandNum() : int
    {
        $rand = rand(1,1000);
        return $rand;
    }
}