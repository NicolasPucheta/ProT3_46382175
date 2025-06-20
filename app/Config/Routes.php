<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('legal', 'Home::legal');

$routes->get('quienesSomos', 'Home::quienesSomos');

$routes->get('productos', 'Home::Productos');

$routes->get('/login', 'Home::login');

$routes->get('/registrate', 'Home::registro');