<?php

namespace App\Entity;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Table;

#[Entity]
#[Table('cars')]
class Cars
{
    #[Id]
    #[Column, GeneratedValue]
    private int $id;
    #[Column(name: 'name')]
    private string $name;
    #[Column(name: 'coast', type: 'decimal')]
    private float $coast;
    #[Column(name: 'speed', type: 'integer')]
    private int $speed;
    #[Column(name: 'created_at')]
    private \DateTime $created_at;


    public function getId(): int
    {
        return $this->id;
    }

     public function setId(int $id): Cars
    {
        $this->id = $id;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): Cars
    {
        $this->name = $name;
        return $this;
    }

    public function getCoast(): float
    {
        return $this->coast;
    }

    public function setCoast(float $coast): Cars
    {
        $this->coast = $coast;
        return $this;
    }

    public function getSpeed(): int
    {
        return $this->speed;
    }

    public function setSpeed(int $speed): Cars
    {
        $this->speed = $speed;
        return $this;
    }

    public function getCreatedAt(): \DateTime
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTime $created_at): Cars
    {
        $this->created_at = $created_at;
        return $this;
    }
}