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
    <form class="w-75 m-auto mt-4" action="index.php" method="POST">
  <div class="mb-3">
    <label class="form-label">Product Price</label>
    <input type="number" class="form-control" name="price" step="0.01">
    <?php
    session_start(); 
    if(isset($_SESSION['price_errors'])){
      foreach($_SESSION['price_errors'] as $error){
        ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $error; ?>
        </div>
        <?php
      }
      unset($_SESSION['price_errors']);
    }?>
  </div>
  <div class="mb-3">
    <label class="form-label">number of pieces</label>
    <input type="number" class="form-control" name="number" step="0.01">
    <?php
    if(isset($_SESSION['number_errors'])){
      foreach($_SESSION['number_errors'] as $error){
        ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $error; ?>
        </div>
        <?php
      }
      unset($_SESSION['number_errors']);
    }?>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</body>
</html>

<?php

?>

