<?php

namespace Unit\Codewars;

use PHPUnit\Framework\TestCase;
use App\Codewars\CodeWars;
class CodewarsTest extends TestCase
{
     public function test_anagrams()
     {
         $this->assertEquals(["a"], CodeWars::anagrams('a', ['a', 'b', 'c']));
     }
}