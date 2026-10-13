<?php

namespace App\Core;

class ModuleManager
{
    public static function loadEnabledModules(): array
    {
        $config = require __DIR__ . '/../../config/modules.php';
        $enabled = [];

        foreach ($config as $moduleName => $isEnabled) {
            if ($isEnabled) {
                $modulePath = __DIR__ . "/../../modules/{$moduleName}/routes.php";
                if (file_exists($modulePath)) {
                    $enabled[$moduleName] = $modulePath;
                }
            }
        }
        return $enabled;
    }
}
