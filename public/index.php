<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Core\Router;
use App\Core\ModuleManager;

$router = new Router();

// Load modules
$modules = ModuleManager::loadEnabledModules();
foreach ($modules as $name => $path) {
    // Each module routes.php should have access to $router
    require_once $path;
}

// Default route
$router->add('GET', '/', function() {
    echo "<h1>Welcome to PHP Base Starter Kit</h1>";
    echo "<p>Modular PHP architecture for Daji and the King.</p>";
});

$router->dispatch();
