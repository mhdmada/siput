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

$routes->get('public/visi_misi', 'Konten::visimisi');
$routes->get('public/struktur', 'Konten::struktur');
$routes->get('public/tentang', 'Konten::tentang');
$routes->get('public/informasi', 'Konten::informasi');
$routes->get('public/kontak', 'Konten::kontak');

$routes->get('news/detail/(:segment)', 'News::detail/$1');

//==================== USER ROUTES ====================

$routes->get('auth', 'Register::index');
$routes->put('auth/(:any)', 'Register::save');

$routes->get('home', 'Dashboard::index');

$routes->get('umkm', 'Umkm::index');
$routes->get('umkm/add', 'Umkm::create');
$routes->post('umkm', 'Umkm::store');
$routes->get('umkm/success/(:num)', 'Umkm::success/$1');
$routes->get('umkm/cetak/(:num)', 'Umkm::cetak/$1');
// $routes->get('umkm/edit/(:any)', 'Umkm::edit/$1');
// $routes->put('umkm/(:any)', 'Umkm::update/$1');
// $routes->delete('umkm/(:segment)', 'Umkm::destroy/$1');

$routes->get('pelatihan', 'Pelatihan::index');
$routes->get('pelatihan/add', 'Pelatihan::create');
$routes->post('pelatihan', 'Pelatihan::store');
$routes->get('pelatihan/edit/(:any)', 'Pelatihan::edit/$1');
$routes->put('pelatihan/(:any)', 'Pelatihan::update/$1');
$routes->delete('pelatihan/(:segment)', 'Pelatihan::destroy/$1');

$routes->get('product', 'Product::index');
$routes->get('product/add', 'Product::create');
$routes->group('image', function($routes) {
    $routes->get('product/get', 'Product::index');
    $routes->get('create', 'Product::create');
    $routes->post('product', 'Product::store');
});

$routes->get('perizinan', 'Perizinan::index');
// $routes->get('perizinan/edit/', 'Perizinan::edit/$1');
// $routes->post('perizinan/update', 'Perizinan::update/$1');
// $routes->get('perizinan/add', 'Perizinan::create');
// $routes->post('perizinan', 'Perizinan::store');
// $routes->delete('perizinan/(:segment)', 'Perizinan::destroy/$1');

$routes->get('pelatihan_dinas', 'PelatihanDinas::index');
$routes->get('pelatihan_dinas/persyaratan', 'PelatihanDinas::persyaratan');
$routes->get('pelatihan_dinas/daftar', 'PelatihanDinas::daftar');
$routes->post('pelatihan_dinas/save', 'PelatihanDinas::save');
$routes->get('pelatihan_dinas/berhasil_daftar', 'PelatihanDinas::berhasil');

$routes->get('berkas', 'Berkas::index');
$routes->get('berkas', 'Berkas::create');
$routes->post('berkas', 'Berkas::save');
// $routes->get('berkas/download/(:num)', 'Berkas::download/$1');

// $routes->delete('pelatihan/(:segment)', 'Pelatihan::destroy/$1');

//================== ADMIN ROUTES ==================

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
$routes->post('admin/product/store', 'AdminProduct::store');
$routes->get('admin/product/edit/(:segment)', 'AdminProduct::edit/$1');
$routes->post('admin/product/update/(:segment)', 'AdminProduct::update/$1');
$routes->delete('admin/product/(:segment)', 'AdminProduct::destroy/$1');
$routes->group('admin/image', function($routes) {
    $routes->get('admin/product/get', 'AdminProduct::index');
    $routes->get('admin/create', 'AdminProduct::create');
    $routes->post('admin/product', 'AdminProduct::store');

});

$routes->get('admin/perizinan', 'AdminPerizinan::index');
$routes->get('admin/perizinan/edit/', 'AdminPerizinan::edit/$1');
$routes->post('admin/perizinan/update', 'AdminPerizinan::update/$1');

$routes->get('admin/berkas', 'AdminBerkas::index');
$routes->get('admin/berkas/download/(:num)', 'AdminBerkas::download/$1');
$routes->get('admin/berkas/destroy/(:num)', 'AdminBerkas::destroy/$1');

$routes->get('admin/syarat_pelatihan', 'AdminSyaratPelatihan::index');
$routes->get('admin/syarat_pelatihan/edit/(:segment)', 'AdminSyaratPelatihan::edit/$1');
$routes->post('admin/syarat_pelatihan/update/(:segment)', 'AdminSyaratPelatihan::update/$1');

$routes->get('admin/pendaftar', 'AdminPendaftaran::index');

$routes->get('admin/laporan', 'AdminLaporan::index');
$routes->get('admin/laporan/export', 'AdminLaporan::export');

$routes->get('admin/rekap_laporan', 'AdminRekapLaporan::index');
$routes->get('admin/rekap_laporan/export', 'AdminRekapLaporan::export');

$routes->get('admin/artikel', 'AdminArtikel::index');
$routes->get('admin/artikel/add', 'AdminArtikel::create');
$routes->post('admin/artikel/store', 'AdminArtikel::store');
$routes->get('admin/artikel/edit/(:segment)', 'AdminArtikel::edit/$1');
$routes->post('admin/artikel/update/(:segment)', 'AdminArtikel::update/$1');
$routes->post('admin/artikel/destroy/(:segment)', 'AdminArtikel::destroy/$1');

$routes->get('admin/konten', 'AdminKonten::index');
$routes->get('admin/konten/add', 'AdminKonten::create');
$routes->post('admin/konten/store', 'AdminKonten::store');
$routes->get('admin/konten/edit/(:segment)', 'AdminKonten::edit/$1');
$routes->post('admin/konten/update/(:segment)', 'AdminKonten::update/$1');