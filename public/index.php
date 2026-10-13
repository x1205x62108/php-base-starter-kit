<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Core\Application;
use App\Core\ModuleManager;

$app = new Application(dirname(__DIR__));

// Load Core Routes
require_once __DIR__ . '/../routes/web.php';
require_once __DIR__ . '/../routes/api.php';

// Load Module Routes
$modules = ModuleManager::loadEnabledModules();
foreach ($modules as $name => $path) {
    require_once $path;
}

$app->run();
