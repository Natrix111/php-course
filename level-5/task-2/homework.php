<?php
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

$result = [];
foreach ($count as $key => $value) {
    if ($value >= 2) {
        $result[] = $key;
    }
}

echo implode(' ', $result);
echo "<br>";

$string = '1 2 3 4 5';

$arr = explode(' ', $string);

$max1 = 0;
$max2 = 0;
for($i = 0; $i < count($arr); $i++){
    if($arr[$i] > $max1){
        $max2 = $max1;
        $max1 = $arr[$i];
    } elseif($arr[$i] > $max2) {
        $max2 = $arr[$i];
    }
}

$sum = $max1 * $max2;
echo $sum;