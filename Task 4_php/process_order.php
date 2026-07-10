<?php
session_start();

if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
    header('location: products.php'); 
    exit();
}

unset($_SESSION['cart']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Order Confirmed</title>
</head>
<body class="text-center mt-5">
    <div class="container">
        <h1 class="text-success">Order Confirmed!</h1>
        <p class="lead">Thank you for your purchase. Your items will be shipped shortly.</p>
        <a href="products.php" class="btn btn-primary mt-3">Continue Shopping</a>
    </div>
</body>
</html>