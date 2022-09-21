<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/home', 'Home::index');
$routes->get('/syarat', 'Syarat::index');
$routes->get('/produk', 'Produk::index');
$routes->get('/produk/detil/(:any)', 'Produk::detil/$1');
$routes->get('/ajukan', 'Ajukan::index');

$routes->get('/hub', 'Hub::index');
$routes->post('/hub/proses', 'Hub::proses');

$routes->get('/login', 'Login::index');
$routes->post('/login/proses', 'Login::proses');
$routes->get('/login/logout', 'Login::logout');

$routes->get('/register', 'Register::index');
$routes->post('/register/proses', 'Register::proses');

$routes->get('/beranda', 'Beranda::index');

$routes->get('/identitas', 'Identitas::index');
$routes->post('/identitas/proses', 'Identitas::proses');

$routes->get('/mediasosial', 'Mediasosial::index');
$routes->post('/mediasosial/proses', 'Mediasosial::proses');

$routes->get('/profile', 'Profile::index');
$routes->post('/profile/proses', 'Profile::proses');

$routes->get('/gantipass', 'Gantipass::index');
$routes->post('/gantipass/proses', 'Gantipass::proses');

$routes->get('/hakakses', 'Hakakses::index');
$routes->get('/hakakses/ajaxlist', 'Hakakses::ajaxlist');
$routes->post('/hakakses/ajax_add', 'Hakakses::ajax_add');
$routes->post('/hakakses/ganti/(:any)', 'Hakakses::ganti/$1');
$routes->post('/hakakses/ajax_edit', 'Hakakses::ajax_edit');
$routes->post('/hakakses/hapus/(:any)', 'Hakakses::hapus/$1');

$routes->get('/korps', 'Korps::index');
$routes->get('/korps/ajaxlist', 'Korps::ajaxlist');
$routes->post('/korps/ajax_add', 'Korps::ajax_add');
$routes->post('/korps/ganti/(:any)', 'Korps::ganti/$1');
$routes->post('/korps/ajax_edit', 'Korps::ajax_edit');
$routes->post('/korps/hapus/(:any)', 'Korps::hapus/$1');

$routes->get('/pangkat', 'Pangkat::index');
$routes->get('/pangkat/ajaxlist', 'Pangkat::ajaxlist');
$routes->post('/pangkat/ajax_add', 'Pangkat::ajax_add');
$routes->post('/pangkat/ganti/(:any)', 'Pangkat::ganti/$1');
$routes->post('/pangkat/ajax_edit', 'Pangkat::ajax_edit');
$routes->post('/pangkat/hapus/(:any)', 'Pangkat::hapus/$1');

$routes->get('/slider', 'Slider::index');
$routes->post('/slider/prosestext', 'Slider::prosestext');

$routes->get('/slider/ajaxlist', 'Slider::ajaxlist');
$routes->post('/slider/ajax_add', 'Slider::ajax_add');
$routes->post('/slider/ganti/(:any)', 'Slider::ganti/$1');
$routes->post('/slider/ajax_edit', 'Slider::ajax_edit');
$routes->post('/slider/hapus/(:any)', 'Slider::hapus/$1');

$routes->get('/syaratumum', 'Syaratumum::index');
$routes->post('/syaratumum/proses', 'Syaratumum::proses');

$routes->get('/syaratkhusus', 'Syaratkhusus::index');
$routes->post('/syaratkhusus/proses', 'Syaratkhusus::proses');

$routes->get('/peta', 'Peta::index');
$routes->post('/peta/proses', 'Peta::proses');

$routes->get('/kotakmasuk', 'Kotakmasuk::index');
$routes->get('/kotakmasuk/ajaxlist', 'Kotakmasuk::ajaxlist');

$routes->get('/vendor', 'Vendor::index');
$routes->get('/vendor/ajaxlist', 'Vendor::ajaxlist');
$routes->post('/vendor/ajax_add', 'Vendor::ajax_add');
$routes->post('/vendor/ganti/(:any)', 'Vendor::ganti/$1');
$routes->post('/vendor/ajax_edit', 'Vendor::ajax_edit');
$routes->post('/vendor/hapus/(:any)', 'Vendor::hapus/$1');
$routes->get('/vendor/detil/(:any)', 'Vendor::detil/$1');
$routes->get('/vendor/ajaxdetil/(:any)', 'Vendor::ajaxdetil/$1');
$routes->post('/vendor/ajax_add_detil', 'Vendor::ajax_add_detil');
$routes->post('/vendor/ganti_detil/(:any)', 'Vendor::ganti_detil/$1');
$routes->post('/vendor/ajax_edit_detil', 'Vendor::ajax_edit_detil');
$routes->post('/vendor/hapusdetil/(:any)', 'Vendor::hapusdetil/$1');

$routes->get('/vendor/subdetil/(:any)', 'Vendor::subdetil/$1');
$routes->get('/vendor/ajaxgambarlain/(:any)', 'Vendor::ajaxgambarlain/$1');
$routes->post('/vendor/prosesdeskripsi', 'Vendor::prosesdeskripsi');
$routes->post('/vendor/ajax_add_gambar', 'Vendor::ajax_add_gambar');
$routes->post('/vendor/ajax_edit_gambar', 'Vendor::ajax_edit_gambar');
$routes->post('/vendor/showgambar/(:any)', 'Vendor::showgambar/$1');
$routes->post('/vendor/hapusgambar/(:any)', 'Vendor::hapusgambar/$1');

$routes->get('/pengguna', 'Pengguna::index');
$routes->get('/pengguna/ajaxlist', 'Pengguna::ajaxlist');

$routes->get('/sales', 'Sales::index');
$routes->get('/sales/ajaxlist', 'Sales::ajaxlist');
$routes->post('/sales/ajax_add', 'Sales::ajax_add');
$routes->post('/sales/ganti/(:any)', 'Sales::ganti/$1');
$routes->post('/sales/ajax_edit', 'Sales::ajax_edit');
$routes->post('/sales/hapus/(:any)', 'Sales::hapus/$1');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
