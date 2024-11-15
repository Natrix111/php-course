<?php
if(!empty($_COOKIE)) {
    $login = $_COOKIE['login'];
    $password = $_COOKIE['password'];
    setcookie('login', $login, time() - 1, '/');
    setcookie('password', $password, time() - 1, '/');
}

header('Location: /level-5/task-5/index.php');