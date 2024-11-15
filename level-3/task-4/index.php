<?php
//Напишите функцию, которая будет принимать на вход 3 аргумента с типом float и возвращать минимальное значение.
function getMinNumber (float $a, float $b, float $c) {
    if ($a < $b && $a < $c) {
        return $a;
    } elseif ($b < $c) {
        return $b;
    } else {
        return $c;
    }
}

echo 'Наименьшее число: ' . getMinNumber(3.5, 3.6, 3.7);

echo '<br>';
//Напишите функцию, которая принимает на вход два аргумента по ссылкам и умножает каждый из них на 2
function multiply(&$x, &$y)
{
    $x *= 2;
    $y *= 2;
}
$num1 = 2;
$num2 = 4;
multiply($num1, $num2);

echo 'Числа умноженые на два: ' . $num1 . ' ' . $num2;

echo '<br>';
//Напишите функцию, считающую факториал числа (произведение целых чисел от единицы до переданного). Реализуйте с помощью рекурсии.

function factorial($n)
{
    if ($n == 0) {
        return 1;
    }

    return $n * factorial($n - 1);
}

echo 'Факториал 5: ' . factorial(5);

echo '<br>';
//Напишите функцию, которая будет выводить на экран целые числа от 0 до переданного значения.

function outputNumbers($x) {
    if ($x === 0) {
        echo $x;
        return;
    }
    outputNumbers($x - 1);
    echo ', ' . $x;
}

outputNumbers(10);