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

// $routes->get('product', 'Product::index');
$routes->get('product/main', 'Product::index');
$routes->get('product/add', 'Product::create');
$routes->group('image', function($routes) {
    $routes->get('product', 'Product::index');
    $routes->get('create', 'Product::create');
    $routes->post('product', 'Product::store');
});

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

$routes->get('admin/product', 'AdminProduct::index');
$routes->get('admin/product/add', 'AdminProduct::create');
$routes->group('image', function($routes) {
    $routes->get('admin/product', 'AdminProduct::index');
    $routes->get('create', 'AdminProduct::create');
    $routes->post('admin/product', 'AdminProduct::store');
});
