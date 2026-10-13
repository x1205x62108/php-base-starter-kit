<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Base Starter Kit</title>
    <style>
        body { font-family: sans-serif; background: #f4f4f4; margin: 0; display: flex; }
        aside { width: 250px; background: #1a1a1a; color: white; height: 100vh; padding: 20px; }
        main { flex: 1; padding: 20px; }
        nav ul { list-style: none; padding: 0; }
        nav li { margin-bottom: 10px; }
        nav a { color: #888; text-decoration: none; transition: 0.3s; }
        nav a:hover { color: #fff; }
        .card { background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
    </style>
</head>
<body>
    <aside>
        <h2>ZYX / BASE</h2>
        <nav>
            <ul>
                <li><a href="/">Dashboard</a></li>
                <li><a href="/auth/login">Login</a></li>
            </ul>
        </nav>
    </aside>
    <main>
        <div class="card">
            {{content}}
        </div>
    </main>
</body>
</html>
