<?php

namespace App\Services\DataBase;

use App\Services\Collection\Collection;

class BasicModel
{
    private static DB $db;
    protected static string $className = __CLASS__;
    protected static string $tableName = __CLASS__;
    protected static array $fields = [];

    public static function find(int $id)
    {
        self::$db = new DB();
        $table = strtolower(substr(static::$tableName, strrpos(static::$tableName, '\\') +1)) . 's';
        $stm = self::$db->adapter->query("SELECT * FROM " . $table . " WHERE id = $id");
        $obj = $stm->fetchObject(static::class);
        return $obj;
    }

    public static function all() : Collection
    {
        self::$db = new DB();
        $table = strtolower(substr(static::$tableName, strrpos(static::$tableName, '\\') +1)) . 's';
        $fields = implode(', ', static::$fields);
        $stmt = self::$db->adapter->query("SELECT $fields FROM " . $table);
        $collections = new Collection();

        foreach ($stmt->fetchAll() as $item) {
            $collections->setData(new static::$className($item));
        }
        return $collections;
    }
}