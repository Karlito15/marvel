<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/default.php',    'Home::default');
$routes->get('/ini.php',        'Home::checkPhpIni');
