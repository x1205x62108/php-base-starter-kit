<?php
use Modules\Auth\Controllers\AuthController;

/** @var App\Core\Router $router */
$router->add('GET', '/auth/login', [AuthController::class, 'login']);
$router->add('POST', '/auth/login', [AuthController::class, 'postLogin']);
