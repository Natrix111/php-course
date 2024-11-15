<?php
$login = !empty($_GET['login']) ? $_GET['login'] : '';
$password = !empty($_GET['password']) ? $_GET['password'] : '';

$outputReault = '';
if ($login == 'admin' && $password == '12345') {
    $outputReault = 'Вы успешно вошли!';
} else if ($login != 'admin') {
    $outputReault = 'Нет такого логина!';
} else {
    $outputReault = 'Неверный пароль!';
}
?>
<html>
<head>
    <title>Результат авторизации</title>
</head>
<body>
<p>
    <?= $outputReault ?>
</p>
</body>
</html>