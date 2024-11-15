<?php

$arr = [];
$i = 345;

while ($i < 357) {
    if ($i % 2 == 0) {
        $arr[] = $i;
    }
    $i++;
}

echo 'массив: ';
foreach ($arr as $value) {
    echo $value . ', ';
}

