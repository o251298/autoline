<?php

namespace App\Entities;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\Table;

#[Entity]
#[Table('transports')]
class Transport
{
    #[Id]
    #[Column, GeneratedValue]
    private $id;
    #[Column(name: 'name', type: 'string')]
    private string $name;
    #[Column(name: 'category_id')]
    private $category_id;
    #[Column(name: 'description', type: 'string')]
    private string $description;
    #[Column(name: 'speed', type: 'integer')]
    private int $speed;
    #[Column(name: 'amount', type: 'float')]
    private float $amount;
    #[ManyToOne(inversedBy: 'transports')]
    private Category $category;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Transport
     */
    public function setId(int $id): Transport
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Transport
     */
    public function setName(string $name): Transport
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCategoryId()
    {
        return $this->category_id;
    }

    /**
     * @param mixed $category_id
     * @return Transport
     */
    public function setCategoryId($category_id)
    {
        $this->category_id = $category_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return Transport
     */
    public function setDescription(string $description): Transport
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return int
     */
    public function getSpeed(): int
    {
        return $this->speed;
    }

    /**
     * @param int $speed
     * @return Transport
     */
    public function setSpeed(int $speed): Transport
    {
        $this->speed = $speed;
        return $this;
    }

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     * @return Transport
     */
    public function setAmount(float $amount): Transport
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return Category
     */
    public function getCategory(): Category
    {
        return $this->category;
    }

    /**
     * @param Category $category
     * @return Transport
     */
    public function setCategory(Category $category): Transport
    {
        $this->category = $category;
        return $this;
    }

}