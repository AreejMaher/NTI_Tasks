<?php
    session_start();
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $price = $_POST['price'];
        $number = $_POST['number'];
        $price_errors = [];
        $number_errors = [];

        if(!(is_numeric($price))){
            $price_errors[] = "Enter a Vaild positive Price | Price is not a number";
        }
        elseif($price < 0){
            $price_errors[] = "Enter a Vaild positive Price | Price is Negative";
        }

        if(!(is_numeric($number))){
            $number_errors[] = "Enter a Vaild positive integer Number of pieces | Number of pieces are not a number";
        }
        else{
            if($number < 0){
            $number_errors[] = "Enter a Vaild positive integer Number of pieces | Number of pieces are Negative";
            }
            if($number != round($number,0)){
            $number_errors[] = "Enter a Vaild positive integer Number of pieces | Number of pieces are Non Integral";
            }
        }


        if($price_errors || $number_errors){
            $_SESSION['price_errors'] = $price_errors;
            $_SESSION['number_errors'] = $number_errors;
            header('location:home.php');
            exit();
        }

        $total_price = $price * $number;
        $discount_rate = 0.1;

        if($total_price>1000){
            $discount_rate = 0.15;
        }
        
        $discount = $total_price*$discount_rate;
        $price_after_discount = $total_price - $discount;

        $_SESSION['total_price'] = $total_price;
        $_SESSION['price_after_discount'] = $price_after_discount;
        header('location: welcome.php');
    }

?>