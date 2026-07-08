<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
     rel="stylesheet" 
     integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" 
     crossorigin="anonymous">
</head>
<body>
<?php
if($_SESSION['total_price'] && $_SESSION['price_after_discount']){
?>
    <div class="alert alert-primary text-center fs-4 mt-4" role="alert">
        <?php  echo "The total price before the discount is : {$_SESSION['total_price']} <br>
            The total price After the discount is : {$_SESSION['price_after_discount']} " ?>
    </div>
<?php
}
?>
</body>