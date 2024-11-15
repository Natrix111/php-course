<?php

$content = '<h2>Заголовок статьи</h2><p>Текст какой-то статьи</p>';
$header = '<h1>Логотип</h1><a href="#">Ссылка</a>';
$sidebar = '<nav><a href="#">Блог</a><a href="#">Отзывы</a><a href="#">О нас</a></nav>';
$footer = '<h3>логотип</h3><a href="#">+7 909 555 88 99</a>';

require __DIR__ . '/header.php';
require __DIR__ . '/sidebar.php';
require __DIR__ . '/content.php';
require __DIR__ . '/footer.php';