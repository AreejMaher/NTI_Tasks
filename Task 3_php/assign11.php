<?php

function find_similar1($arr1, $arr2){
    $similar_arr = [];
    echo "function 1 : Similar elements are : [";
    foreach ($arr1 as $element1){
        foreach ($arr2 as $element2){
            if($element1 == $element2){
                array_push($similar_arr , $element1);
                echo " $element1";
            }
        }
    }
    echo " ] <br>";
    return $similar_arr;
}

function find_similar2($arr1, $arr2){
    $similar_arr = array_intersect($arr1, $arr2);
    echo "function 2 : Similar elements are : [";
    foreach($similar_arr as $arr){
        echo " $arr";
    }
    echo " ] <br>";
    return $similar_arr;
}

$arr1=array('a','b','c','d');
$arr2=array('c','d','e','f');
find_similar1($arr1, $arr2);
find_similar2($arr1, $arr2);

?>