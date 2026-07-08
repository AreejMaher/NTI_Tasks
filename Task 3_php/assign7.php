<?php
function counting($array, $keyword){
    $count = 0;
    foreach ($array as $arr){
        if ($keyword == $arr){
            $count++;
        }
    }
    echo "$keyword appeared $count times <br>";
}


$films=array("avatar","Prestige","avatar","Prestige");
$keyword="avatar";
counting($films, $keyword);
?>