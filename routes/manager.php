<?php


$routes->group('manager', ['namespace' => 'App\Controllers\Manager'],  function ($routes) {
    $routes->get('/', 'ManagerController::index', ['as' => 'manager']);


   $routes->group('categories',  function ($routes) {
        $routes->get('/', 'categoriesController::index', ['as' => 'categories']);
        
        $routes->get('get-all', 'categoriesController::getAllCategories', ['as' => 'categories.get.all']);
    
    });


});


