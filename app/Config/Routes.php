<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->match(['get', 'head'], '/', 'Home::index');
$routes->get('tasks', 'Tasks::index');
$routes->get('tasks/new', 'Tasks::create');
$routes->post('tasks', 'Tasks::store');
$routes->post('tasks/(:num)/toggle', 'Tasks::toggle/$1');
$routes->get('profile', 'Profile::index');
$routes->get('accounts/new', 'Profile::create');
$routes->post('accounts', 'Profile::store');
$routes->get('about', 'About::index');
