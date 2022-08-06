<?php

namespace Unit;

use PHPUnit\Framework\TestCase;
use App\Services\TestService;
class TestClassTest extends TestCase
{
    public function test_example()
    {
        $this->assertTrue(true);
    }

    public function test_max()
    {
        $max = 100;
        $actual = TestService::getRandNum();
        $this->assertEquals($max, $actual);
    }
}