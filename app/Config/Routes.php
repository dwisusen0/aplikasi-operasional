<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('/', 'Auth::index');
$routes->get('login', 'Auth::index');
$routes->post('login/process', 'Auth::loginProcess');
$routes->get('logout', 'Auth::logout');
$routes->get('dashboard', 'Dashboard::index', ['filter' => 'auth']);
$routes->get('barang', 'Barang::index', ['filter' => 'auth']);
$routes->get('barang/create', 'Barang::create', ['filter' => 'auth']);
$routes->post('barang/store', 'Barang::store', ['filter' => 'auth']);
$routes->get('barang/delete/(:num)', 'Barang::delete/$1', ['filter' => 'auth']);
