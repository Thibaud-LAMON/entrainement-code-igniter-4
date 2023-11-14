<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index'); //route principale, toutes les routes suivent le modèle : $routes->[requête http]('/[URI]', '[contrôleur]::[méthode]);
$routes->get('/about-us', 'Sites::index');
$routes->get('/services', 'ServiceController::index');
$routes->get('add-student', 'Sites::insertStudent');
$routes->get('update-student', 'Sites::updateStudent');
$routes->get('delete-student', 'Sites::deleteStudent');
$routes->get('students', 'Sites::selectStudents');
