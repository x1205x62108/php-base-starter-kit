<?php

namespace Modules\Auth\Controllers;

class AuthController
{
    public function login(): void
    {
        echo "<h1>Login Page</h1>";
        echo '<form method="POST" action="/auth/login">';
        echo 'Username: <input type="text" name="username"><br>';
        echo 'Password: <input type="password" name="password"><br>';
        echo '<button type="submit">Login</button>';
        echo '</form>';
    }

    public function postLogin(): void
    {
        echo "Processing Login...";
        // Logic here
    }
}
