<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?? 'PHP Base Starter Kit'; ?></title>
    <style>
        body { font-family: sans-serif; background: #f4f4f4; margin: 0; display: flex; }
        aside { width: 250px; background: #333; color: white; height: 100vh; padding: 20px; }
        main { flex: 1; padding: 20px; }
        nav ul { list-style: none; padding: 0; }
        nav li { margin-bottom: 10px; }
        nav a { color: #ccc; text-decoration: none; }
        nav a:hover { color: white; }
    </style>
</head>
<body>
    <aside>
        <h2>PHP BASE</h2>
        <nav>
            <ul>
                <li><a href="/">Dashboard</a></li>
                <li><a href="/auth/login">Login</a></li>
            </ul>
        </nav>
    </aside>
    <main>
        <?php echo $content; ?>
    </main>
</body>
</html>
