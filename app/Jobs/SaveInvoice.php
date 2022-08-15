<?php

namespace App\Jobs;

use App\Services\DataBase\DB;

class SaveInvoice extends Job
{

    protected $store;
    protected static $class = __CLASS__;
    public function __construct($data = null)
    {
        parent::__construct($data);
        $this->store = new DB();
    }

    public function handle()
    {

        foreach (range(1,10000) as $item)
        {
            $this->store->adapter->query("INSERT INTO invoices (invoice) VALUES ($item)");
            print $item . PHP_EOL;
        }
        return true;
    }
}