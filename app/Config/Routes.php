<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->group('notes', static function ($routes) {
    $routes->get('', 'NoteController::index');
    $routes->get('create', 'NoteController::create', ['as' => 'notes.create']);
    $routes->delete('delete/(:num)', 'NoteController::delete/$1', ['as' => 'notes.delete']);
    $routes->get('edit/(:num)', 'NoteController::edit/$1', ['as' => 'notes.edit']);
    $routes->post('update/(:num)', 'NoteController::update/$1', ['as' => 'notes.update']);
    $routes->post('store', 'NoteController::store', ['as' => 'notes.store']);
});