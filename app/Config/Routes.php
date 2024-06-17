<?php

use CodeIgniter\Router\RouteCollection;

$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * @var RouteCollection $routes
 */

 $routes->get('create-db', function() {
    $forge = \Config\Database::forge();
    if ($forge->createDatabase('siput')) 
    {
        echo 'Database created!';
    }
 });


 $routes->get('login', 'Auth::login');

// $routes->get('/', 'Home::index');
$routes->addRedirect('/', 'home');

$routes->get('register', 'Register::index');
$routes->put('register/(:any)', 'Register::store');
$routes->put('register/(:any)', 'Register::save');

$routes->get('umkm', 'Umkm::index');
$routes->get('umkm/add', 'Umkm::create');
$routes->post('umkm', 'Umkm::store');
$routes->get('umkm/edit/(:any)', 'Umkm::edit/$1');
$routes->put('umkm/(:any)', 'Umkm::update/$1');
$routes->delete('umkm/(:segment)', 'Umkm::destroy/$1');


$routes->get('pelatihan', 'Pelatihan::index');
$routes->get('pelatihan/add', 'Pelatihan::create');
$routes->post('pelatihan', 'Pelatihan::store');
$routes->get('pelatihan/edit/(:any)', 'Pelatihan::edit/$1');
$routes->put('pelatihan/(:any)', 'Pelatihan::update/$1');
$routes->delete('pelatihan/(:segment)', 'Pelatihan::destroy/$1');

$routes->get('penjualan', 'Penjualan::index');
$routes->get('penjualan/edit/(:any)', 'Penjualan::edit/$1');
$routes->put('penjualan/(:any)', 'Penjualan::update/$1');
$routes->delete('penjualan/(:segment)', 'Penjualan::destroy/$1');