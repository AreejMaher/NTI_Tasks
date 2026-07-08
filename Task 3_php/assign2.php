<?php
function calc($num1 = 4, $num2=2){
   echo "The multiplication is : " . $num1*$num2 . "<br>";
   echo "The subtration is : " .$num1-$num2 . "<br>";
   if($num2 == 0){
     echo "undefined divided" . "<br>";
   }
   else{
    echo "The division is : " .$num1/$num2 . "<br>";
   }
}

calc(10,5);
?>
