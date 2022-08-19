<?php

namespace App\Services\Collection;
use Exception;
use JetBrains\PhpStorm\Internal\TentativeType;
use Traversable;

class Collection implements \IteratorAggregate
{
    public array $data = [];
    public function __construct(array $data = [])
    {
        $this->data = $data;
    }

    public function getIterator(): Traversable
    {
        return new \ArrayIterator($this->data);
    }

    public function setData($data): void
    {
        $this->data[] = $data;
    }
}