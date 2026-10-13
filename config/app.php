<?php

return [
    'name' => $_ENV['APP_NAME'] ?? 'ZYX PHP Base',
    'env'  => $_ENV['APP_ENV'] ?? 'local',
    'debug'=> $_ENV['APP_DEBUG'] ?? true,
];
