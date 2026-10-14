<?php

namespace Modules\Auth\Controllers;

use App\Core\Application;
use App\Core\Request;
use App\Core\Response;

class AuthController
{
    public function login(): string
    {
        Application::$app->view->setLayout('layouts/auth');
        Application::$app->view->title = 'Login - ZYX PHP Base';
        $viewPath = Application::$ROOT_DIR . '/modules/Auth/Views/login.php';
        return Application::$app->view->renderView($viewPath);
    }

    public function postLogin(Request $request, Response $response)
    {
        $body = $request->getBody();
        $username = $body['username'] ?? '';
        $password = $body['password'] ?? '';

        // Simple hardcoded login for demonstration
        if ($username === 'admin' && $password === 'admin') {
            $_SESSION['user'] = ['id' => 1, 'username' => 'admin'];
            $response->redirect('/');
            return;
        }

        // Failed login
        Application::$app->view->setLayout('layouts/auth');
        $viewPath = Application::$ROOT_DIR . '/modules/Auth/Views/login.php';
        echo Application::$app->view->renderView($viewPath, [
            'error' => 'Invalid username or password.'
        ]);
    }
}
