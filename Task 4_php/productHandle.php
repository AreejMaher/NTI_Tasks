<?php
session_start();
include_once("productsData.php");

if($_SERVER['REQUEST_METHOD']=='POST'){
    $id = $_POST['product_id'];
    $productsNames = array_keys($products);
    $selectedName =  $productsNames[$id]; // name of the selected product
    $selectedDetails = $products[$selectedName]; //details of the selected products

    if(!isset($_SESSION['cart'])){
        $_SESSION['cart'] = [];
    }
    $_SESSION['cart'][] = [
        'id' => $id,
        'name' => $selectedName,
        'price' => $selectedDetails['price'],
        'img' => $selectedDetails['img'],
        'desc' => $selectedDetails['desc'],
    ];
    header('location:checkout.php');
    exit();
}
?>