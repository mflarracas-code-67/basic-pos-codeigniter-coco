<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Home
$routes->get('/', 'Pages::home');

// Authentication
$routes->get('/login', 'Auth::login');
$routes->post('/login', 'Auth::attemptLogin');
$routes->get('/logout', 'Auth::logout');

// About
$routes->get('/about', 'Pages::about');

// Customers - Protected
$routes->group('customers', ['filter' => 'auth'], function ($routes) {

    $routes->get('/', 'Customers::index');
    $routes->post('add', 'Customers::add');

    $routes->get('edit/(:num)', 'Customers::edit/$1');
    $routes->post('update/(:num)', 'Customers::update/$1');

    $routes->get('delete/(:num)', 'Customers::delete/$1');
});

// Users - Protected
$routes->group('users', ['filter' => 'auth'], function ($routes) {

    $routes->get('/', 'Users::index');
    $routes->get('new', 'Users::new');
    $routes->post('add', 'Users::add');

    $routes->get('edit/(:num)', 'Users::edit/$1');
    $routes->post('update/(:num)', 'Users::update/$1');

    $routes->get('delete/(:num)', 'Users::delete/$1');
});

// Tasks
$routes->get('/tasks', 'Tasks::index');
$routes->post('/tasks/add', 'Tasks::add');
$routes->get('/tasks/edit/(:num)', 'Tasks::edit/$1');
$routes->post('/tasks/update/(:num)', 'Tasks::update/$1');
$routes->get('/tasks/delete/(:num)', 'Tasks::delete/$1');

// Profile
$routes->get('/profile', 'Profile::index');