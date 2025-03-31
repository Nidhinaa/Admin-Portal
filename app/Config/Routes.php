<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Auth::login');
$routes->get('/login', 'Auth::login');
$routes->post('/loginProcess', 'Auth::loginProcess');
$routes->get('/logout', 'Auth::logout');


$routes->get('admin/dashboard','Admin::dashboard');

$routes->get('customer/dashboard','Customer::dashboard');
$routes->get('customer/create','Customer::create');
$routes->post('customer/store','Customer::store');
$routes->get('customer/edit/(:num)','Customer::edit/$1');
$routes->post('customer/update/(:num)','Customer::update/$1');

$routes->get('invoice/dashboard', 'Invoice::dashboard');
$routes->get('invoice/create', 'Invoice::create');
$routes->post('invoice/store', 'Invoice::store');
$routes->get('invoice/edit/(:num)', 'Invoice::edit/$1');
$routes->post('invoice/update/(:num)', 'Invoice::update/$1');
