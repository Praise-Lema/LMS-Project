<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Book</title>
    <!-- <link rel="stylesheet" href="CSS/Bootstrap/node_modules/bootstrap/dist/css/bootstrap.css"> -->

</head>
<body>
<?php 
    include_once __DIR__."/Partials/navigation.php";
    include_once __DIR__."/validation.php";
?>

<h1 class="text-center">Add Category Of Book</h1>
    <div class="container">
        <form action="category.php" method="post">
        <div class="form-group mt-3">
                <label for="bookcategory">Category Of Book:</label>
                <input type="text" class="form-control" name="bookcategory" id="bookcategory">
            </div>

            <input type="submit" name="submit" value="Add category" style="background-color:green;" class="btn btn-secondary mt-3">

        </form>
    </div>
