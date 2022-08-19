<?php

namespace App\Models;

use App\Services\DataBase\BasicModel;

class Categorie extends BasicModel
{

    private $id;
    private $name;
    private $description;
    protected static array $fields = ['id', 'name', 'description'];

    public function __construct(array $data)
    {
        $this->id = $data['id'];
        $this->name = $data['name'];
        $this->description = $data['description'];
    }

    protected static string $tableName = __CLASS__;
    protected static string $className = __CLASS__;
    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }


}