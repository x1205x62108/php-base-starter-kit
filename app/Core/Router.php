<?php

namespace App\Core;

class Router
{
    private array $routes = [];

    public function add(string $method, string $path, callable|array $handler): void
    {
        $this->routes[] = [
            'method' => $method,
            'path' => $path,
            'handler' => $handler
        ];
    }

    public function dispatch(): void
    {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $method = $_SERVER['REQUEST_METHOD'];

        foreach ($this->routes as $route) {
            if ($route['method'] === $method && $route['path'] === $uri) {
                $handler = $route['handler'];
                if (is_callable($handler)) {
                    $handler();
                } elseif (is_array($handler)) {
                    [$controller, $action] = $handler;
                    (new $controller)->$action();
                }
                return;
            }
        }

        http_response_code(404);
        echo "404 Not Found";
    }
}
