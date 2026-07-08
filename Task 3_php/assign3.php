<?php
function sumOfArray($array){
    $sum = 0;
    foreach($array as $arr){
        $sum += $arr;
    }
    return $sum;
}

$array = [1,2,3,4,5];
$sum = sumOfArray($array);
echo $sum;
?>