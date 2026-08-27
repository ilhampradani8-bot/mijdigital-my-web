<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('index', 'Home::index');
$routes->get('services', 'Home::services');
$routes->get('portfolio', 'Home::portfolio');
$routes->get('faq', 'Home::faq');
$routes->get('privacy', 'Home::privacy');
$routes->get('terms', 'Home::terms');
$routes->get('cookies', 'Home::cookies');
$routes->get('admin', 'Home::admin');
