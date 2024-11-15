<?php
//На вход подается строка из чисел, разделенных пробелами.
//Найдите наиболее часто встречающееся число в строке.
$input = '1 2 2 2 3 4 4';

$numbers = explode(' ', $input);

$count = [];

foreach ($numbers as $number) {
    if (isset($count[$number])) {
        $count[$number]++;
    } else {
        $count[$number] = 1;
    }
}

$result = 0;
foreach ($count as $key => $value) {
    if ($value >= 2) {
        $result = $value;
    }
}

echo $result;
echo "<br>";

//На вход подается строка из чисел, разделенных пробелами.
//Переместите все нули в конец строки. Порядок остальных чисел должен сохраниться.

$string = '1 0 2 0 3 0 4';

$arr = explode(' ', $string);

$noZeroz = [];
$zeros = [];

foreach ($arr as $value) {
    if ($value == 0) {
        $zeros[] = $value;
    } else {
        $noZeroz[] = $value;
    }
}

$result = implode(' ', array_merge($noZeroz, $zeros));

echo $result;