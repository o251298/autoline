<?php

namespace App\Jobs;

abstract class Job
{
    protected $data;
    public function __construct($data = null)
    {
        $this->data = $data;
    }

    abstract public function handle();
}