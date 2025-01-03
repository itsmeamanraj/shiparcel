<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Home route
$routes->get('/', 'Home::index');
$routes->get('dashboard', 'Home::dashboard');
$routes->get('single_shipment', 'Home::single_shipment');

// login route
$routes->post('login', 'AuthUser::login');

