<?php
require_once './../vendor/autoload.php';
require_once '../routes/web.php';
use Dotenv\Dotenv;
use App\Router;
use App\Models\Transport;

Dotenv::createMutable(dirname(dirname(__FILE__)))->load();(new Router($routes))->run();
