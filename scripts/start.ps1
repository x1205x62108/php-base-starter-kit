Write-Host "Starting ZYX PHP Base Development Server..."
Write-Host "Local: http://localhost:8000"
php -S 127.0.0.1:8000 -t public public/router.php
