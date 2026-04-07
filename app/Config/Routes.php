<?php

use App\Controllers\Home;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('(:segment)', [Home::class, 'view']);

//$routes->set404Override('App\Controllers\Welcome::pageNotFound');
