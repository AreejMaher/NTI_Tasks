<?php include 'navbar.php'; session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Account</title>
</head>
<body>
    <?php include_once("navbar.php")?>
    <!-- check if there is a user session so show the update form if not show the sign in form -->
    <?php if(isset($_SESSION["user"])){ ?>
        <form class="w-75 m-auto mt-5 pt-5" action="accountUpdate.php" method="post">
            <div class="mb-3">
                <label class="form-label">User Name</label>
                <input type="text" class="form-control" name="userName">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Phone Number</label>
                <input type="number" class="form-control" name="phoneNumber">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Facebook account URL</label>
                <input type="url" class="form-control" name="facebookURL">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Twitter account URL</label>
                <input type="url" class="form-control" name="twitterURL">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Instagram account URL</label>
                <input type="url" class="form-control" name="instagramURL">
            </div>
            <button type="submit" class="btn btn-primary">Update your INFO</button>
        </form>
    <?php } else { ?> 
        <form class="w-75 m-auto mt-5 pt-5" action="accountSign.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Sign IN</button>
        </form>
    <?php } ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" 
crossorigin="anonymous"></script>
</body>
</html>

<?php
if(isset ($_SESSION['errors'])){
    foreach($_SESSION['errors'] as $error){
?>
<div class="alert alert-danger w-75 m-auto mt-3">
<?php  echo $error;  ?>
</div>
<?php
    }
    unset($_SESSION['errors']);
}
?>