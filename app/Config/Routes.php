<?php

use App\Controllers\Home;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('(:segment)', [Home::class, 'view']);

$routes->post('ajax/send-contact-form', [Home::class, 'sendContactForm']);

//$routes->set404Override('App\Controllers\Welcome::pageNotFound');
