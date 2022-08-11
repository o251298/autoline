<?php
namespace App\Console;

class TestCommand extends Command
{
    public function commandName(): void
    {
        $this->name = "test:test";
    }
}