<?php

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

// Routes system
$routes = new RouteCollection();
$routes->add('main', new Route('/', array('controller' => 'MainController', 'method'=>'index')));
$routes->add('product', new Route('/category/{id}', array('controller' => 'MainController', 'method'=>'category'), array('id' => '[0-9]+')));