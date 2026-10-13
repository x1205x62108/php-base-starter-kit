<?php

namespace App\Core;

use PDO;
use Exception;

class DatabaseManager
{
    private ?PDO $pdo = null;

    public function __construct(array $config)
    {
        $driver = $config['driver'] ?? 'sqlite';
        if ($driver === 'sqlite') {
            $dbPath = $config['database'] ?? __DIR__ . '/../../database/database.sqlite';
            $dsn = "sqlite:{$dbPath}";
        } else {
            $host = $config['host'];
            $port = $config['port'];
            $db = $config['database'];
            $dsn = "{$driver}:host={$host};port={$port};dbname={$db}";
        }

        try {
            $this->pdo = new PDO($dsn, $config['username'] ?? null, $config['password'] ?? null, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            ]);
            if ($driver === 'sqlite') {
                $this->pdo->exec('PRAGMA foreign_keys = ON;');
            }
        } catch (Exception $e) {
            throw new Exception("Database Connection Failed: " . $e->getMessage());
        }
    }

    public function getPdo(): PDO
    {
        return $this->pdo;
    }
}
