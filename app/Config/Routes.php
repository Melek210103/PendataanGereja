<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Home
$routes->get('/', 'AuthController::index');
$routes->post('/login', 'AuthController::index');
$routes->post('/login', 'AuthController::login');
$routes->get('/Home', 'Home::index');
$routes->get('/logout', 'AuthController::logout');

// Anggota
$routes->get('/anggota', 'Anggota::index');
$routes->post('/anggota/tambah', 'Anggota::tambah/$1');

// Baptis
$routes->get('/baptis', 'Baptis::index');
$routes->post('/baptis/tambah', 'Baptis::tambah');
$routes->get('/baptis/hapus/(:num)', 'Baptis::hapus/$1');
$routes->delete('/baptis/hapus/(:num)', 'Baptis::hapus/$1');

// Gereja
$routes->get('/gereja', 'Gereja::index');

// Jemaat
$routes->get('/jemaat', 'Jemaat::index');

// Kartu Keluarga
$routes->get('/kk', 'Kk::index');

// KSP
$routes->get('/ksp', 'Ksp::index');

// Majelis
$routes->get('/majelis', 'Majelis::index');

// Wijk
$routes->get('/wijk', 'Wijk::index');

// Login Routes
$routes->get('/login', 'Auth::login'); // Menampilkan halaman login
$routes->post('/login', 'Auth::processLogin'); // Memproses data login
$routes->get('/logout', 'Auth::logout'); // Logout dan redireksi ke halaman login

// Grouping middleware (opsional, jika ingin membatasi akses)
$routes->group('', ['filter' => 'auth'], function($routes) {
    // Rute yang hanya bisa diakses jika login
    $routes->get('/dashboard', 'Dashboard::index');
});
