<?php

namespace App\Console;

class Command
{
    protected $data;
    protected string $name;

    public function __construct($data = null)
    {
        $this->data = $data;
    }

    public function commandName() : void
    {
        $this->name = "test:command";
    }

    public function handle()
    {

    }
}