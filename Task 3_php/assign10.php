<?php
function selection_sort($array){
    $range = count($array);
    for($i=0 ; $i<$range-1 ; $i++){
        $key = $array[$i];
        for($j=$i+1 ; $j<$range ; $j++){
            if ($array[$i] > $array[$j]){
                //swap
                $temp = $array[$j];
                $array[$j] = $array[$i];
                $array[$i] = $temp;
            }
        }
    }
    echo "[";
    foreach($array as $number){
        echo " {$number}";
    }
    echo " ] <br>";
}

$tests=array(6,4,9,3,12,8,7);
selection_sort($tests);
?>