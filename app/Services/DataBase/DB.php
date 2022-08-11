<?php

namespace App\Services\DataBase;
use Zend_Db_Adapter_Pdo_Mysql;
class DB
{
    public Zend_Db_Adapter_Pdo_Mysql $adapter;
    public function __construct()
    {
        $this->adapter = new Zend_Db_Adapter_Pdo_Mysql([
            'host'     => 'mysql',
            'username' => 'admin',
            'password' => 'o251298',
            'dbname'   => 'autoline'
        ]);
        return $this;
    }
}