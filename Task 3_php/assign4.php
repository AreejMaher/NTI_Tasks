<?php
function findMovie($keyword, $films){
    $found = false;
    foreach($films as $film){
        if($keyword == $film){
            $found = true;
            break;
        }
    }
    echo ($found) ?  "YES" : "NO";
    echo "<br>";
}

$films = array("Fast","Predestination","Persuit","Prestige");
findMovie("avatar", $films);
findMovie("Persuit", $films);
findMovie("Predestination", $films);
findMovie("ittakestwo", $films);
?>