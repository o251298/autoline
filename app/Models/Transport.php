<?php

namespace App\Models;

use App\Services\DataBase\BasicModel;
use App\Services\DataBase\DB;
use App\Services\MoneyConvertor\AmountConvertor;
class Transport extends BasicModel
{
    private int $id;
    private int $category_id;
    private string $name;
    private string $description;
    private int $speed;
    private float $amount;
    private string $color;



    private float $usa;
    private float $euro;
    private float $rub;

    protected static string $tableName = __CLASS__;
    protected static string $className = __CLASS__;

    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getCategoryId(): int
    {
        return $this->category_id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    public function getColor(): string
    {
        return $this->color;
    }
    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return int
     */
    public function getSpeed(): int
    {
        return $this->speed;
    }

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * @return float
     */
    public function getUsa(): float
    {
        return $this->usa;
    }

    /**
     * @param float $usa
     * @return Transport
     */
    public function setUsa(): Transport
    {
        $this->usa = AmountConvertor::convert($this->getAmount(), AmountConvertor::USA);
        return $this;
    }

    /**
     * @return float
     */
    public function getEuro(): float
    {
        return $this->euro;
    }

    /**
     * @param float $euro
     * @return Transport
     */
    public function setEuro(): Transport
    {
        $this->euro = AmountConvertor::convert($this->getAmount(), AmountConvertor::EURO);
        return $this;
    }

    /**
     * @return float
     */
    public function getRub(): float
    {
        return $this->rub;
    }

    public function setRub(): Transport
    {
        $this->rub = AmountConvertor::convert($this->getAmount(), AmountConvertor::RUB);
        return $this;
    }


}