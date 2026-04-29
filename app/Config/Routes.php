<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Admin::login');
$routes->get('/home/coba-parameter/(:alpha)/(:num)/(:alphanum)', 'Home::belajar_segment/$1/$2/$3');
$routes->get('tugas', 'Home::tugas');
$routes->match(['get', 'post'], 'nilai', 'Home::nilai');
$routes->get('/latihan/if', 'Latihan::contoh_if');
$routes->get('/latihan/for', 'Latihan::contoh_for');
$routes->get('/latihan/foreach', 'Latihan::contoh_foreach');

//login admin
$routes->get('/Admin/login-admin', 'Admin::login');
$routes->get('/admin/dashboard-admin', 'Admin::dashboard');
$routes->post('/admin/autentikasi-login', 'Admin::autentikasi');
$routes->get('/admin/logout', 'Admin::logout');