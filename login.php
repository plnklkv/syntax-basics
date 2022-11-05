<?php
$login = !empty($_GET['login']) ? $_GET['login'] : '';
$password = !empty($_GET['password']) ? $_GET['password'] : '';

$okLogin = false;
$okPassword = false;

if ($login === 'admin') {
    $okLogin = true;
    if ($password === '12345')
        $okPassword = true;
}
?>

<html>
<head>
    <title>Авторизация</title>
</head>
<body>
<p>
    <?= $okLogin ? ($okPassword ? 'Пользователь авторизован' : 'Неверный пароль') : 'Пользователь не найден!' ?>
</p>
Переданный логин - <?= $login ?>
<br>
Переданный пароль - <?= $password ?>
</body>
</html>
