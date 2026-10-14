<?php

namespace App\Core;

use PDO;
use Throwable;

class MigrationManager
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function applyMigrations(): bool
    {
        $this->createMigrationsTable();
        $appliedMigrations = $this->getAppliedMigrations();

        $files = scandir(Application::$ROOT_DIR . '/database/migrations');
        sort($files); 
        
        $toApplyMigrations = array_diff($files, $appliedMigrations);
        $count = 0;
        $success = true;

        foreach ($toApplyMigrations as $migration) {
            if ($migration === '.' || $migration === '..' || !str_ends_with($migration, '.php')) {
                continue;
            }

            require_once Application::$ROOT_DIR . '/database/migrations/' . $migration;
            $className = pathinfo($migration, PATHINFO_FILENAME);
            $instance = new $className();
            
            echo "Applying migration $migration... ";
            
            try {
                $this->pdo->beginTransaction();
                $instance->up($this->pdo);
                $this->saveMigration($migration);
                $this->pdo->commit();
                echo "DONE" . PHP_EOL;
                $count++;
            } catch (Throwable $e) {
                if ($this->pdo->inTransaction()) {
                    $this->pdo->rollBack();
                }
                echo "FAILED: " . $e->getMessage() . PHP_EOL;
                $success = false;
                break;
            }
        }

        if ($success) {
            if ($count === 0) {
                echo "All migrations are applied." . PHP_EOL;
            } else {
                echo "Total $count migrations applied." . PHP_EOL;
            }
        }
        
        return $success;
    }

    protected function createMigrationsTable()
    {
        $this->pdo->exec("CREATE TABLE IF NOT EXISTS migrations (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            migration VARCHAR(255) UNIQUE,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        );");
    }

    protected function getAppliedMigrations()
    {
        $statement = $this->pdo->prepare("SELECT migration FROM migrations");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_COLUMN);
    }

    protected function saveMigration(string $migration)
    {
        $statement = $this->pdo->prepare("INSERT INTO migrations (migration) VALUES (:migration)");
        $statement->bindValue(':migration', $migration);
        $statement->execute();
    }
}
