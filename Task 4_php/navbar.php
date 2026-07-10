<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Navbar</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top py-3" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand px-5 mx-2 fs-3" href="#">Ecart</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse  fs-4" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto px-5">
                    <a class="nav-link active mx-2" aria-current="page" href="home.php">Home</a>
                    <a class="nav-link mx-2" href="products.php">All Products</a>
                    <a class="nav-link mx-2" href="logout.php">Log out</a>
                    <a class="nav-link mx-2" href="account.php">Account</a>
                </div>
            </div>
        </div>
    </nav>
</body>
</html>