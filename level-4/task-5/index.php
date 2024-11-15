<?php
//напишите функцию, принимающую на вход 2 аргумента - массив и какое-либо значение.
// Функция возвращает true, если переданное значение присутствует в массиве и false - если нет.
function search($array, $num)
{
    foreach ($array as $element) {
        if ($element == $num) {
            return true;
        }
    }
    return false;
}

//напишите функцию, принимающую на вход 2 аргумента - массив и какое-либо значение. Функция возвращает число вхождений числа в массив.
// Например: для массива [1, 2, 1, 3] число вхождений числа "1" будет равно двум.
function countInArr($array, $num)
{
    $count = 0;
    foreach ($array as $element) {
        if ($element == $num) {
            $count += 1;
        }
    }
    return $count;
}

echo countInArr([1, 2, 3 ,1, 1,1] , 1);
echo "<br>";

//Дана строка с числами, разделенными пробелом.
//Найдите все четные числа и выведите их, разделяя пробелами. Порядок чисел должен быть таким же, как и на входе.
$arr_number = [];
$str = '1 2 3 4 5 6 7 8';
$str_arr = explode(' ', $str);
foreach ($str_arr as $str) {
    if ($str % 2 == 0) {
        $arr_number[] = $str;
    }
}

$result = implode(' ', $arr_number);
echo $result;
echo "<br>";

//Числа Фибоначчи - это последовательность чисел, в которой первые два числа это 0 и 1, а каждое следующее число равно сумме двух предыдущих.
//В этой задаче вам нужно написать код, который будет выводить первые n чисел этой последовательности.
$n = 6;

$fibonacci = [];

for ($i = 0; $i < $n; $i++) {
    if ($i == 0) {
        $fibonacci[] = 0;
    } elseif ($i == 1) {
        $fibonacci[] = 1;
    } else {
        $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }
}

echo implode(' ', $fibonacci);
