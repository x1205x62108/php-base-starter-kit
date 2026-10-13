<?php

$uri = rawurldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

// Security: Prevent directory traversal and only allow files in public
$filePath = __DIR__ . $uri;
if ($uri !== '/' && file_exists($filePath) && is_file($filePath)) {
    return false;
}

require_once __DIR__ . '/index.php';
