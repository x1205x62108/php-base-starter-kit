# ZYX PHP Base Starter Kit

Modern, lightweight PHP application architecture following the "One-click" and "Modular" philosophy.

## 🚀 Project Roadmap

### Phase 1 — PHP Base (Current)
Establish the most basic execution environment, program architecture, and SQLite support.
- **V0.1**: Base Skeleton
- **V0.2**: Base Runtime (Bootstrap, Router, Request, Response)
- **V0.3**: Base Database (SQLite + PDO, Migrations)
- **V0.4**: Base Views (Layout, Renderer)
- **V0.5**: Base Foundation (Helpers, Middleware)

### Phase 2 — PHP Foundation
Reusable core capabilities and basic components.

### Phase 3 — PHP Starter Kit
Encapsulate verified functions into enabled/combinable modules.

### Phase 4 — Project Kits
Template derived from Starter Kit for specific business needs.

## 🛠️ Quick Start

### Installation
1. `git clone https://github.com/x1205x62108/php-base-starter-kit.git`
2. `cd php-base-starter-kit`
3. `./scripts/install.sh`

### Start Development Server
`./scripts/start.sh` (or `.\scripts\start.ps1` on Windows)

Local URL: http://localhost:8000

## 📂 Core Abilities
- **Bootstrap**: Unified initialization via `Application.php`.
- **Router**: Regex-based routing for GET/POST and Controllers.
- **Database**: SQLite-first with PDO and a custom Migration engine.
- **View Renderer**: Simple PHP-based SSR with Layout support.
- **Error Handling**: Unified exception and HTTP error pages.

Built with 🦊✨ for the King.
