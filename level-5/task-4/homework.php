<?php
//На вход подается строка из чисел, разделенных пробелами.
//Замените каждый элемент строки произведением всех других элементов.
//Рассмотрим на примере строки "1 2 3".
//Новое значение вместо "1" это "2 * 3 = 6". Для "2" это "1 * 3 = 3". Для "3" это "1 * 2 = 2"

$input = '1 2 3';

$numbers = explode(' ', $input);

$totalSum = 1;
foreach ($numbers as $number) {
    $totalSum *= $number;
}

$result = [];

foreach ($numbers as $number) {
    if ($number != 0) {
        $result[] = $totalSum / $number;
    } else {
        $result[] = 0;
    }
}

$output = implode(' ', $result);

echo $output;
echo "<br>";

//На вход подается строка целых чисел, разделенных пробелами.
//Найдите максимальную разницу между двумя элементами строки при условии, что меньшее число должно находиться справа от большего.
//Например, для строки "1 6 4 3" правильный ответ: "3" (6-3)

$string = "1 60 4 3 20";
$array = explode(" ", $string);

$max_difference = 0;

for ($i = 0; $i < count($array); $i++) {
    for ($j = $i + 1; $j < count($array); $j++) {
        if ($array[$j] < $array[$i]) {
            $difference = $array[$i] - $array[$j];
            if ($difference > $max_difference) {
                $max_difference = $difference;
            }
        }
    }
}

echo $max_difference;
