<?php 
function RouteBubble($array){
    $range = (count($array)-1);
    for($i=0 ; $i<$range ; $i++){
        for($j=0 ; $j<$range-$i ; $j++){
            if ($array[$j] > $array[$j+1]){
                //swap
                $temp = $array[$j];
                $array[$j] = $array[$j+1];
                $array[$j+1] = $temp;
            }
        }
    }
    echo "[";
    foreach($array as $number){
        echo " {$number}";
    }
    echo " ] <br>";
}

RouteBubble([5, 3, 8, 2, 1]);
RouteBubble([85, 12, 104, 32, 77]);

?>