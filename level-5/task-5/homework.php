<?php
function maxArraySum($input) {
    $numbers = explode(' ', $input);

    $maxCurrent = $numbers[0];
    $maxGlobal = $numbers[0];

    for ($i = 1; $i < count($numbers); $i++) {
        $maxCurrent = max($numbers[$i], $maxCurrent + $numbers[$i]);

        if ($maxCurrent > $maxGlobal) {
            $maxGlobal = $maxCurrent;
        }
    }

    return $maxGlobal;
}

$input = "-2 1 -3 4 -1 2 1 -5 4";
$result = maxArraySum($input);
echo $result;


