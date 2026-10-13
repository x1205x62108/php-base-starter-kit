# PHP Base Starter Kit

A lightweight, modular PHP development base following PSR-4 standards and a "One-click" philosophy.

## Features
- **Modular**: Enable/disable features in `config/modules.php`.
- **Lightweight**: No heavy frameworks, just pure PHP with PSR-4 autoloading.
- **Developer Friendly**: Built-in router, module manager, and starter scripts.

## Installation
1. Clone the repo.
2. Run `composer install`.
3. Copy `.env.example` to `.env`.
4. Run `./scripts/start.sh`.

## Directory Structure
- `app/`: Core application logic (Router, ModuleManager).
- `modules/`: Pluggable business modules.
- `public/`: Web server entry point.
- `config/`: System and module configurations.

Built with 🦊✨ for the King.
