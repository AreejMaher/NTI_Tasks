<?php
session_start();
include ("validate.php");
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // retrive data
    $email = $_POST["email"];
    $password = $_POST["password"];
    $userName = $_POST["username"];
    $phoneNumber = $_POST["phoneNumber"];
    $facebookURL = $_POST["facebookURL"];
    $instagramURL = $_POST["instagramURL"];
    $twitterURL = $_POST["twitterURL"];
    $errors = [];
    // loop for all validation 
    foreach($validations as $validateName => $validateVal){
        $value = filter_input(INPUT_POST, $validateName, $validateVal['filter'], $validateVal['my_options'] ?? null );
        //if any one is empty
        if(empty($_POST[$validateName])){
            $errors[$validateName] = "You must fill the {$validateName} place";
        }
        //if the value is false then the validation failed
        elseif(!$value){
            $errors[$validateName] = $validateVal['errors'];
        }
    }
    // create error session of their is any errors
    if($errors){
        $_SESSION['errors'] = $errors;
        header('location:account.php');
        exit();
    }
    //if not create a user session
    $_SESSION['user'] = [
        'userName' => $userName,
        'email'=> $email,
        'password'=> $password,
        'phoneNumber' => $phoneNumber,
        'facebookURL' => $facebookURL,
        'instagramURL'=> $instagramURL,
        'twitterURL'=> $twitterURL
        ];
    header('location:products.php');
    exit();

}
?>