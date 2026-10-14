# Installation script for ZYX PHP Base Starter Kit

Write-Host "Starting Installation..." -ForegroundColor Cyan

# 1. Check for PHP
if (!(Get-Command php -ErrorAction SilentlyContinue)) {
    Write-Error "PHP is not installed or not in PATH."
    exit 1
}

# 2. Copy .env
if (!(Test-Path .env)) {
    Write-Host "Creating .env from .env.example..."
    Copy-Item .env.example .env
}

# 3. Composer Install
if (Get-Command composer -ErrorAction SilentlyContinue) {
    Write-Host "Running composer install..."
    composer install
} else {
    Write-Warning "Composer not found. Please run 'composer install' manually."
}

# 4. Initialize SQLite
if (!(Test-Path database)) { New-Item -ItemType Directory database }
if (!(Test-Path database\database.sqlite)) { New-Item -ItemType File database\database.sqlite }

# 5. Run Migrations
Write-Host "Running migrations..."
php bin\console migrate

Write-Host "Installation Complete!" -ForegroundColor Green
