<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/materials', 'MaterialController::index');
$routes->get('/materials/create', 'MaterialController::create');
$routes->post('/materials/store', 'MaterialController::store');
$routes->get('/materials/edit/(:num)', 'MaterialController::edit/$1');
$routes->post('/materials/update/(:num)', 'MaterialController::update/$1');
$routes->get('/materials/delete/(:num)', 'MaterialController::delete/$1');
// $routes->get('/materials', 'MaterialController::index');
$routes->get('orders', 'OrdersController::index');
$routes->get('orders/create', 'OrdersController::create');
$routes->post('orders/store', 'OrdersController::store');
$routes->get('orders/edit/(:num)', 'OrdersController::edit/$1');
$routes->post('orders/update/(:num)', 'OrdersController::update/$1');
$routes->get('orders/delete/(:num)', 'OrdersController::delete/$1');
$routes->get('/orders/invoice/(:num)', 'OrdersController::invoice/$1');
$routes->get('/orders/invoice/(:num)', 'OrdersController::createInvoice/$1');
// app/Config/Routes.php
$routes->get('/orders/show/(:num)', 'OrderController::show/$1');
$routes->get('/orders/createInvoice/(:num)', 'OrderController::createInvoice/$1');
$routes->get('/invoices', 'InvoiceController::index');
//Routing Customers
$routes->get('/customers', 'CustomerDataController::index');
//Routing Login Register
$routes->get('login', 'Auth::login');
$routes->post('login', 'Auth::attemptLogin');
$routes->get('register', 'Auth::register');
$routes->post('register', 'Auth::attemptRegister');
$routes->get('/logout', 'Auth::logout');
