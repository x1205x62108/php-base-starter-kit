#!/bin/bash
set -e # Fail early

echo "Starting Installation for ZYX PHP Base Starter Kit..."

# 1. Check for PHP
if ! command -v php &> /dev/null; then
    echo "Error: PHP is not installed."
    exit 1
fi

# 2. Copy .env if not exists
if [ ! -f .env ]; then
    echo "Creating .env from .env.example..."
    cp .env.example .env
fi

# 3. Composer Install
if command -v composer &> /dev/null; then
    echo "Running composer install..."
    composer install
else
    echo "Error: Composer not found. Please install composer."
    exit 1
fi

# 4. Initialize SQLite Database
mkdir -p database
touch database/database.sqlite

# 5. Run Initial Migrations
echo "Running migrations..."
php bin/console migrate

echo "Installation Complete!"
