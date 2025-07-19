<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/',               'Home::index');
$routes->get('/avion.php',      'Home::avion');
$routes->get('/chien.php',      'Home::chien');
$routes->get('/embleme.php',    'Home::embleme');
$routes->get('/film.php',       'Home::film');
$routes->get('/fruit.php',      'Home::fruit');
$routes->get('/pasta.php',      'Home::pasta');
$routes->get('/pays.php',       'Home::pays');
$routes->get('/pilote.php',     'Home::pilote');
$routes->get('/rappeur.php',    'Home::rappeur');
$routes->get('/serie.php',      'Home::serie');
