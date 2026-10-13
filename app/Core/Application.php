<?php

namespace App\Core;

use Dotenv\Dotenv;

class Application
{
    public static string $ROOT_DIR;
    public Router $router;
    public Request $request;
    public Response $response;
    public Database $db;
    public View $view;
    public static Application $app;

    public function __construct(string $rootDir)
    {
        self::$ROOT_DIR = $rootDir;
        self::$app = $this;
        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request, $this->response);
        $this->view = new View();

        $dotenv = Dotenv::createImmutable($rootDir);
        $dotenv->safeLoad();

        $dbConfig = [
            'driver' => $_ENV['DB_CONNECTION'] ?? 'sqlite',
            'host' => $_ENV['DB_HOST'] ?? '127.0.0.1',
            'port' => $_ENV['DB_PORT'] ?? '5432',
            'database' => $_ENV['DB_DATABASE'] ?? $rootDir . '/database/database.sqlite',
            'username' => $_ENV['DB_USERNAME'] ?? null,
            'password' => $_ENV['DB_PASSWORD'] ?? null,
        ];
        $this->db = new Database($dbConfig);
    }

    public function run()
    {
        try {
            echo $this->router->resolve();
        } catch (\Exception $e) {
            $this->response->setStatusCode($e->getCode() ?: 500);
            echo $this->view->renderView('_error', [
                'exception' => $e
            ]);
        }
    }
}
