<?php

namespace Unit\Router;

use App\Router;
use PHPUnit\Framework\TestCase;

class RouterTest extends TestCase
{
    public function test_run()
    {
        $_SERVER['REQUEST_URI'] = "/ss";
        $router = new Router();
        $actual = $router->getUrl()->run();
        $this->assertEquals(false, $actual);
    }
}