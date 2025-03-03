<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'BookController::index');
$routes->get('add', 'BookController::add');
$routes->post('store', 'BookController::store');
$routes->get('edit/(:num)', 'BookController::edit/$1');
$routes->post('update/(:num)', 'BookController::update/$1');
$routes->get('delete/(:num)', 'BookController::delete/$1');
