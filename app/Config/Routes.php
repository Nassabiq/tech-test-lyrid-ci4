<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
// app/Config/Routes.php
$routes->get('/login', 'AuthController::login');
$routes->post('/auth/loginProcess', 'AuthController::loginProcess');
$routes->get('/logout', 'AuthController::logout');

$routes->get('/users', 'UsersController::index', ['filter' => 'auth']);
$routes->get('/users/create', 'UsersController::create', ['filter' => 'auth']);
$routes->get('/users/edit/(:num)', 'UsersController::edit/$1', ['filter' => 'auth']);
$routes->post('/users/update/(:num)', 'UsersController::update/$1', ['filter' => 'auth']);
$routes->post('/users/store', 'UsersController::store', ['filter' => 'auth']);
$routes->delete('/users/delete/(:num)', 'UsersController::delete/$1', ['filter' => 'auth']);

$routes->get('/pegawai', 'PegawaiController::index', ['filter' => 'auth']);
$routes->get('/pegawai/create', 'PegawaiController::create', ['filter' => 'auth']);
$routes->get('/pegawai/edit/(:num)', 'PegawaiController::edit/$1', ['filter' => 'auth']);
$routes->post('/pegawai/update/(:num)', 'PegawaiController::update/$1', ['filter' => 'auth']);
$routes->post('/pegawai/store', 'PegawaiController::store', ['filter' => 'auth']);
$routes->delete('/pegawai/delete/(:num)', 'PegawaiController::delete/$1', ['filter' => 'auth']);


// app/Config/Routes.php
