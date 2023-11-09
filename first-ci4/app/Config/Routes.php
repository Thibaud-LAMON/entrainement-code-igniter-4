<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index'); //route principale, toutes les routes suivent le modèle : $routes->[requête http]('/[URI]', '[Contrôleur]::[fonction]);
