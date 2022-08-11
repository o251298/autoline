<?php

namespace App\Codewars;

class CodeWars
{
    public static function anagrams(string $word, array $words) : array
    {
        $wordArray = [];
        $result = [];
        for($i = 0; strlen($word) > $i; $i++)
        {
            $wordArray[] = $word[$i];
        }
        sort($wordArray);
        $word = implode('', $wordArray);
        foreach ($words as $item)
        {
            $itemArray = [];
            for($i = 0; strlen($item) > $i; $i++)
            {
                $itemArray[] = $item[$i];
            }
            sort($itemArray);
            $itemWord = implode('', $itemArray);
            if ($itemWord == $word)
            {
                $result[] = $item;
            }
        }
        return $result;
    }

    public static function is_prime(int $n): bool
    {
        if ($n < 2) return false;
        if ($n % 2 == 0) return false;
        if (($n % 3 == 0) && $n !== 3) return false;
        if (($n % 5 == 0) && $n !== 3) return false;
        if (($n % 7 == 0) && $n !== 3) return false;
        if ($n > 10000)
        {
            for ($i = $n / 2; $i < $n; $i++)
            {
                if ($n % $i == 0)
                {
                    return false;
                }
            }
        }
        for ($i = 2; $i < $n; $i++)
        {
            if ($n % $i == 0)
            {
                return false;
            }
        }
        return true;
    }
}