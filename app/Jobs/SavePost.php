<?php

namespace App\Jobs;

use App\Services\DataBase\DB;

class SavePost extends Job
{
    protected $store;
    public function __construct($data = null)
    {
        parent::__construct($data);
        $this->store = new DB();
    }

    public function handle()
    {

        foreach (range(1,100) as $item)
        {
            $this->store->adapter->query("INSERT INTO posts (post) VALUES ($item)");
            print $item . PHP_EOL;
        }
    }
}