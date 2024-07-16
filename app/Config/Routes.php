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

$routes->get('/', 'Home::index');
// $routes->addRedirect('/', 'home');

$routes->get('auth', 'Register::index');
$routes->put('auth/(:any)', 'Register::save');

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

$routes->get('produk', 'Produk::index');
$routes->get('produk/add', 'Produk::create');
$routes->post('produk', 'Produk::store');
$routes->get('produk/edit/(:any)', 'Produk::edit/$1');
$routes->put('produk/(:any)', 'Produk::update/$1');
$routes->delete('produk/(:segment)', 'Produk::destroy/$1');

//admin routes

$routes->get('/', 'Admin::index');
// $routes->addRedirect('/', 'admin/home');

$routes->get('admin/umkm', 'AdminUmkm::index');
$routes->get('admin/umkm/add', 'AdminUmkm::create');
$routes->post('admin/umkm', 'AdminUmkm::store');
$routes->get('admin/umkm/edit/(:any)', 'AdminUmkm::edit/$1');
$routes->put('admin/umkm/(:any)', 'AdminUmkm::update/$1');
$routes->delete('admin/umkm/(:segment)', 'AdminUmkm::destroy/$1');

$routes->get('admin/pelatihan', 'AdminPelatihan::index');
$routes->get('admin/pelatihan/add', 'AdminPelatihan::create');
$routes->post('admin/pelatihan', 'AdminPelatihan::store');
$routes->get('admin/pelatihan/edit/(:any)', 'AdminPelatihan::edit/$1');
$routes->put('admin/pelatihan/(:any)', 'AdminPelatihan::update/$1');
$routes->delete('admin/pelatihan/(:segment)', 'AdminPelatihan::destroy/$1');

$routes->get('admin/produk', 'AdminProduk::index');
$routes->get('admin/produk/edit/(:any)', 'AdminProduk::edit/$1');
$routes->put('admin/produk/(:any)', 'AdminProduk::update/$1');
$routes->delete('admin/produk/(:segment)', 'AdminProduk::destroy/$1');