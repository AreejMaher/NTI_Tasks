<?php include_once("productsData.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Products</title>
</head>
<body>
    <?php include_once("navbar.php"); $id=0; ?>
    <div class="container justify-content-center">
        <div class="row g-3 my-5 pt-5">
            <!-- loop for each product and print its details -->
            <?php foreach($products as $productName => $productSpec) {?>
            <div class="col-lg-4 col-md-6 col-12 mt-5">
                <div class="card text-center h-100 w-75" style="width: 18rem;">
                    <img src=<?= $productSpec['img'];?> class="h-100 w-100" style="object-fit: contain;">
                    <div class="card-body">
                        <h5 class="card-title"><?= $productName;?></h5>
                        <p class="card-text"><?= $productSpec['desc'];?></p>
                        <p class="card-text fw-bold"><?= "Price : \${$productSpec['price']}";?></p>
                        <form action="productHandle.php" method="post">
                            <input type="hidden" name="product_id" value="<?= $id++; ?>">
                            <button type="submit" name="submit" class="btn btn-primary">Add To Chart</button>
                        </form>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" 
    crossorigin="anonymous"></script>
</body>
</html>