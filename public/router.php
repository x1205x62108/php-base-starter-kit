<?php

$uri = rawurldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

// Security: Prevent directory traversal and only allow files in public
$publicDir = __DIR__;
$filePath = realpath($publicDir . $uri);

if ($uri !== '/' && $filePath && str_starts_with($filePath, $publicDir) && is_file($filePath)) {
    return false;
}

require_once $publicDir . '/index.php';
