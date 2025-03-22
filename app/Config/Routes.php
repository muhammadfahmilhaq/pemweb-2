<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about', 'Page::about');
$routes->get('/contact', 'Page::contact');
$routes->get('/Faqs', 'Page::Faqs');
$routes->get('/Biodata', 'Page::Biodata');
$routes->setAutoRoute(true);