<?php
function isAnagram($word1, $word2)
{
    if (strlen($word1) != strlen($word2)) {
        return 'нет';
    }

    $word1 = strtolower($word1);
    $word2 = strtolower($word2);

    $arr1 = str_split($word1);
    $arr2 = str_split($word2);
    echo var_dump($arr1);

    $arr1 = array_reverse($arr1 );
    $arr2 = array_reverse($arr2);

    if (array_diff($arr1, $arr2)) {
        return "нет";
    } else {
        return 'да';
    }
}

$string1 = "CAT";
$string2 = "TAC";

$result = isAnagram($string1, $string2);

echo $result;