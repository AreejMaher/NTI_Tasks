<?php
function max_number($array){
    $max_number = 0;
    for($i=0 ; $i< count($array) ; $i++){
        if($array[$i] > $max_number){
            $max_number = $array[$i];
        }
    }
    echo " function 1 max number is : " . $max_number . "<br>";
}

function max_number2($array){
    //sort and get the last number which will be the max number
    sort($array);
    $max_number = $array[count($array)-1];
    echo " function 2 max number is : " . $max_number . "<br>";
}


$tests=array(5,4,9,3,1,7,5,8,6);
max_number($tests);
max_number2($tests);
?>