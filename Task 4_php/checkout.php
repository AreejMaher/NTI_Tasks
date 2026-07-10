<?php 
session_start();
include_once("navbar.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CheckOut</title>
</head>
<body>
    <div class="container my-5 pt-5">
    <h2>Your Shopping Cart</h2>
    <table class="table table-hover mt-4">
        <thead class="table-dark">
            <tr>
                <th>Product</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $total = 0;
            // loop for items in the cart session and print there info
            foreach($_SESSION['cart'] as $item) { ?>
                <tr>
                    <td><?= $item['name']; ?></td>
                    <td>$<?= $item['price']; ?></td>
                </tr>
            <?php 
                // add their prices
                $total += $item['price'];
            } ?>
        </tbody>
        <tfoot>
            <tr class="table-active">
                <td><strong>Total</strong></td>
                <td><strong>$<?= $total; ?></strong></td>
            </tr>
        </tfoot>
    </table>
    
    <div class="d-flex justify-content-end g-4">
        <a href="process_order.php" class="btn btn-success btn-lg">Confirm Purchase</a>
    </div>
</div>
</body>
</html>