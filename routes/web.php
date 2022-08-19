<?php

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;
use App\Controllers\MainController;
// Routes system
$routes = new RouteCollection();
$routes->add('main', new Route('/', array('controller' => 'MainController', 'method'=>'index')));
$routes->add('category', new Route('/category/{id}', array('controller' => 'MainController', 'method'=>'category'), array('id' => '[0-9]+')));
$routes->add('transport', new Route('/transport/{id}', ['controller' => 'MainController', 'method'=> 'transport'], array('id' => '[0-9]+')));