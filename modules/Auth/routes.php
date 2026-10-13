<?php
use Modules\Auth\Controllers\AuthController;
use App\Core\Application;

/** @var \App\Core\Application $app */
$app->router->get('/auth/login', [AuthController::class, 'login']);
$app->router->post('/auth/login', [AuthController::class, 'postLogin']);
