<?php
require_once './../vendor/autoload.php';
use Dotenv\Dotenv;
use App\Router;
Dotenv::createMutable(dirname(dirname(__FILE__)))->load();
use App\Services\Redis\RedisClient;
(new Router())->getUrl()->run();

$re = new RedisClient();
$re->client->ping();
//$queue = [
//    'first' => range(1,10),
//    'second'=> range(5,9),
//    'third'=> range(20, 30),
//];
//foreach ($queue as $item)
//{
//    call_user_func('logs', $item);
//}

//
//foreach ($queue as $v)
//{
//    if (($pid=pcntl_fork())===-1)
//        {
//            continue;
//        } else if ($pid)  {
//        // Parent process
//        pcntl_wait($status, WNOHANG); //protect against zombie children, one wait vs one child
//        } else if ($pid===0) {
//        // children process
//        call_user_func('logs', $v);
//        exit();//avoid foreach loop in child process
//    }
//}

//function logs(array $data)
//{
//    foreach ($data as $item)
//    {
//        // connect
//        print_r($item) . PHP_EOL;
//        sleep(1);
//    }
//}


?>