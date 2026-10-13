<?php
use App\Core\Application;

/** @var \App\Core\Application $app */

$app->router->get('/', function() {
    return "<h1>PHP Base Starter Kit V0.2</h1><p>SQLite + Migration Engine Online.</p>";
});

$app->router->get('/auth/login', [\Modules\Auth\Controllers\AuthController::class, 'login']);
