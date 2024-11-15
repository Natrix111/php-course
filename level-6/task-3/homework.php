<?php
$string = '10 5 8 2';
$arr = explode(' ', $string);

function mySort($a, $b) {
    $ab = $a . $b;
    $ba = $b . $a;
    return $ba <=> $ab;
}

usort($arr, "mySort");

echo implode('', $arr);
