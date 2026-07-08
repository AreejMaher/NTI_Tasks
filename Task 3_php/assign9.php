<?php

function yes_no($array){
    echo "[";
    foreach ($array as $arr){
        //if type boolean remove it and but Yes or No instead
       if (gettype($arr) == "boolean"){
            $arr = ($arr) ? "Yes" : "No";
       }
       echo " $arr";
    }
    echo " ]";
}


$tests=array(1,"tariq",1.5,true,7,'s',false);
yes_no($tests);

?>