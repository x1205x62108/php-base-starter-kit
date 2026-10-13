<?php

namespace Modules\Database;

use PDO;
use PDOException;

class Service
{
    private ?PDO $pdo = null;

    public function __construct()
    {
        $host = $_ENV['DB_HOST'] ?? '127.0.0.1';
        $db   = $_ENV['DB_DATABASE'] ?? 'test';
        $user = $_ENV['DB_USERNAME'] ?? 'root';
        $pass = $_ENV['DB_PASSWORD'] ?? '';
        $port = $_ENV['DB_PORT'] ?? '3306';
        $driver = $_ENV['DB_CONNECTION'] ?? 'mysql';

        $dsn = "{$driver}:host={$host};port={$port};dbname={$db}";
        
        try {
            $this->pdo = new PDO($dsn, $user, $pass, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            ]);
        } catch (PDOException $e) {
            // In a real app, log this properly
            error_log("Database Connection Error: " . $e->getMessage());
        }
    }

    public function getPdo(): ?PDO
    {
        return $this->pdo;
    }
}
