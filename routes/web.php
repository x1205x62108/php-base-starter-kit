<?php
use App\Core\Application;

/** @var \App\Core\Application $app */

$app->router->get('/', function() {
    return Application::$app->view->renderView('home', [
        'name' => 'ZYX PHP Base'
    ]);
});

// Auth routes are now loaded via ModuleManager, but we can keep a fallback or custom override here if needed.
// However, according to V0.2.1 fix, they should come from the module.
