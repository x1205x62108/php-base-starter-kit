<?php

namespace App\Core;

use Dotenv\Dotenv;
use Throwable;

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

        // Normalize DB path
        $dbConn = $_ENV['DB_CONNECTION'] ?? 'sqlite';
        $dbName = $_ENV['DB_DATABASE'] ?? 'database/database.sqlite';
        
        if ($dbConn === 'sqlite' && !str_starts_with($dbName, '/')) {
            $dbName = $rootDir . '/' . ltrim($dbName, '/');
        }

        $dbConfig = [
            'driver'   => $dbConn,
            'host'     => $_ENV['DB_HOST'] ?? '127.0.0.1',
            'port'     => $_ENV['DB_PORT'] ?? '5432',
            'database' => $dbName,
            'username' => $_ENV['DB_USERNAME'] ?? null,
            'password' => $_ENV['DB_PASSWORD'] ?? null,
        ];
        $this->db = new Database($dbConfig);
    }

    public function run()
    {
        try {
            echo $this->router->resolve();
        } catch (Throwable $e) {
            $code = $e->getCode();
            if (!is_int($code) || $code < 100 || $code >= 600) {
                $code = 500;
            }
            $this->response->setStatusCode($code);
            echo $this->view->renderView('_error', [
                'exception' => $e
            ]);
        }
    }
}
