<?php
function checkAuth(string $login, string $password): bool
{
    $users = require __DIR__ . '/userDB.php';

    foreach ($users as $user) {
        if ($user['login'] === $login && $user['password'] === $password)
            return true;
    }
    return false;
}

function getUserLogin(): ?string
{
    $loginFromCookies = $_COOKIE['login'] ?? '';
    $passwordFromCookies = $_COOKIE['password'] ?? '';

    if (checkAuth($loginFromCookies, $passwordFromCookies))
        return $loginFromCookies;
    return null;
}