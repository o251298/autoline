<?php
require_once 'vendor/autoload.php';
use Dotenv\Dotenv;
Dotenv::createMutable(dirname(__FILE__))->load();
$funcName = $argv[1];

try {
    run($funcName);
} catch (\Exception $exception) {
    print $exception->getMessage() . PHP_EOL;
}

function searchCommand(string $commandName): string
{
    $res = `grep $commandName app/Console/*`;
    if (!$res) throw new \Exception("Command Not found");
    $path = '\\' . str_replace('/', '\\', ucfirst(substr($res, 0, strpos($res, ':') - 4)));
    if (!class_exists($path)) throw new \Exception("Class not found");
    return $path;
}

function run(string $funcName) : void
{
    $path = searchCommand($funcName);
    $obj = new $path();
    $obj->handle();
}

