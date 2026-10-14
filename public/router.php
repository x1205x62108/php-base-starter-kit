<?php

$uri = rawurldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

$publicDir = __DIR__;
$filePath = realpath($publicDir . $uri);

// Security: Ensure path is within public directory and use directory separator for boundary
if (
    $uri !== '/' && 
    $filePath && 
    str_starts_with($filePath, $publicDir . DIRECTORY_SEPARATOR) && 
    is_file($filePath)
) {
    return false;
}

require_once $publicDir . '/index.php';
