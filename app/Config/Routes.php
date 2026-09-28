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

// Users
$routes->get('/users', 'Users::index');

// Tasks
$routes->get('/tasks', 'Tasks::index');
$routes->post('/tasks/add', 'Tasks::add');

// Profile
$routes->get('/profile', 'Profile::index');