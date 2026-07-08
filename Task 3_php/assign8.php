<?php

function RouteRandomPass($n){
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $random_string = '';

    for($i=0 ; $i<$n ; $i++){
        //get a random index from the lenght of the characters
        $index = random_int(0, strlen($characters)-1);
        // appead that charater of that index to the random string
        $random_string .= $characters[$index];
    }
    echo "$random_string <br>";
    return $random_string;
}

RouteRandomPass(10);
RouteRandomPass(5);

