#!/bin/bash
echo "Starting ZYX PHP Base Starter Kit Development Server..."
echo "Local: http://localhost:8000"
php -S 127.0.0.1:8000 -t public public/router.php
