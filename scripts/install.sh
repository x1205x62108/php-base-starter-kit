#!/bin/bash

echo "Starting Installation for ZYX PHP Base Starter Kit..."

# 1. Copy .env if not exists
if [ ! -f .env ]; then
    echo "Creating .env from .env.example..."
    cp .env.example .env
fi

# 2. Composer Install
if command -v composer &> /dev/null
then
    echo "Running composer install..."
    composer install
else
    echo "Warning: Composer not found. Please install composer and run 'composer install' manually."
fi

# 3. Initialize SQLite Database
mkdir -p database
touch database/database.sqlite

# 4. Run Initial Migrations
echo "Running migrations..."
php bin/console migrate

echo "Installation Complete!"
