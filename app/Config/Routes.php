<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Kredit::index');
$routes->post('kredit/hitung', 'Kredit::hitung');
