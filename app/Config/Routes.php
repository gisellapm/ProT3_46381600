<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::principal');
$routes->get('principal_view', 'Home::principal');
$routes->get('contacto', 'Home::contacto'); 
$routes->get('acerca_de', 'Home::acerca_de'); 
$routes->get('registro', 'Home::registro'); 
$routes->get('login', 'Home::login');
