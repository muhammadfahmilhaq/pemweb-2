<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/pagefilmfavorit', 'page::FilmFavorit');
$routes->get('/pagematakuliah', 'page::MataKuliah');
$routes->get('/pagemusicfavorit', 'page::MusicFavorit');
$routes->get('/pageproyek', 'page::Proyek');
$routes->get('/tamplate', 'page::tamplate');
$routes->get('/tampilanpertama', 'page::tampilanpertama');
$routes->get('/tampilankedua', 'page::tampilankedua');
$routes->get('/tampilanketiga', 'page::tampilanketiga');