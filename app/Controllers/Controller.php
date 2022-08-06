<?php

namespace App\Controllers;

class Controller
{
    public function view(string $page, array $parametrs) : void
    {
        foreach ($parametrs as $key => $value)
        {
            $$key = $value;
        }
        include_once '../../views/' . $page . '.php';
    }
}