<?php
session_start();
include ("validate.php");
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // retrive data
    $email = $_POST["email"];
    $password = $_POST["password"];
    $errors = [];
    // only email and password for sign in
    $fieldsToValidate = ["email","password"];

    // loop for the email and password as a validate name
    foreach($fieldsToValidate as $validateName){
        // use them as a key and det their values(details)
        $validateVal = $validations[$validateName];
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
        'email'=> $email,
        'password'=> $password
        ];
    header('location:products.php');
    exit();

}
?>