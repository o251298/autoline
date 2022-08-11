<?php

namespace App\Entities;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\Table;

#[Entity]
#[Table('categories')]
class Category
{
    #[Id]
    #[Column, GeneratedValue]
    private $id;

    #[Column(name: 'name', type: 'string')]
    private $name;

    #[Column(name: 'description', type: 'string')]
    private $description;

    #[OneToMany(targetEntity: Transport::class, mappedBy: 'category')]
    private Collection $transports;

    public function __construct()
    {
        $this->transports = new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Category
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return Category
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     * @return Category
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return ArrayCollection|Collection
     */
    public function getTransports(): ArrayCollection|Collection
    {
        return $this->transports;
    }

    /**
     * @param ArrayCollection|Collection $transports
     * @return Category
     */
    public function setTransports(ArrayCollection|Collection $transports): Category
    {
        $this->transports = $transports;
        return $this;
    }

    public function addTransport(Transport $item)
    {
        $item->setCategory($this);
        $this->transports->add($item);
        return $this;
    }

}