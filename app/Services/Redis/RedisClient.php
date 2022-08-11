<?php

namespace App\Services\Redis;
use Predis\Client;

class RedisClient
{
    public Client $client;

    public function __construct()
    {
        $this->client = new Client([
                'host'   => $_ENV['REDIS_HOST'],
                'port'   => $_ENV['REDIS_PORT'],
            ]);
    }
}