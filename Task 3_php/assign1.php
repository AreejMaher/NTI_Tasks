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
    <form class="w-75 m-auto mt-3"action="assign1.php" method="POST">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Age</label>
            <input type="number" class="form-control" name="age">
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
</body>
</html>

<?php
    session_start();
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $age = $_POST['age'];

        if($age>18){
?>
            <div class="alert alert-danger w-75 m-auto mt-3" role="alert">Login Granted</div>
<?php
        }
        else{
?>
            <div class="alert alert-danger w-75 m-auto mt-3" role="alert">Failed to Log in | You're under the required age.</div>
<?php
        }
    }

?>

