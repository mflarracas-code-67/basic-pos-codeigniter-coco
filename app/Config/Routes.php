<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Home
$routes->get('/', 'Pages::home');

// About
$routes->get('/about', 'Pages::about');

// Customers
$routes->get('/customers', 'Customers::index');
$routes->post('/customers/add', 'Customers::add');
$routes->get('/customers/edit/(:num)', 'Customers::edit/$1');
$routes->post('/customers/update/(:num)', 'Customers::update/$1');
$routes->get('/customers/delete/(:num)', 'Customers::delete/$1');

// Users
$routes->get('/users', 'Users::index');

// Tasks
$routes->get('/tasks', 'Tasks::index');
$routes->post('/tasks/add', 'Tasks::add');
$routes->get('/tasks/edit/(:num)', 'Tasks::edit/$1');
$routes->post('/tasks/update/(:num)', 'Tasks::update/$1');
$routes->get('/tasks/delete/(:num)', 'Tasks::delete/$1');

// Profile
$routes->get('/profile', 'Profile::index');