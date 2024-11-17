<?php

function combinationsFunction($elements, $k)
{
    $result = [];
    function generateCombinations($elements, $k, $currentCombination, &$result)
    {
        if ($k == 0) {
            $result[] = $currentCombination;
            return;
        }

        foreach ($elements as $element) {
            $currentCombination[] = $element;
            generateCombinations($elements, $k - 1, $currentCombination, $result);
            array_pop($currentCombination);
        }
    }

    generateCombinations($elements, $k, [], $result);
    return $result;
}

$input = '1 2 3';
$k = 2;

$elements = explode(' ', $input);

$combinations = combinationsFunction($elements, $k);

foreach ($combinations as $combination) {
    echo implode(' ', $combination) . "<br>";
}
