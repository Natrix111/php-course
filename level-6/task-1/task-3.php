<?php
$line = '1 2 3';
$numbers = explode(' ', $line);

foreach ($numbers  as $i => $num1) {
    foreach ($numbers  as $j => $num2) {
        if ($i === $j) {
            continue;
        }

        echo $num1 . ' ' . $num2 . "<br>";
    }
}