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
    include_once __DIR__."\Partials/navigation.php";
?>
    <h1 class="text-center">Add a Book</h1>
    <div class="container">
        <form action="connection.php" method="post" enctype="multipart/form-data">
            
            <div class="form-group mt-3">
                <label for="">Book Title:</label>
                <input type="text" class="form-control" name="booktitle">
            </div>

            <div class="form-group mt-3">
                <label for="">Book Author:</label>
                <input type="text" class="form-control" name="bookauthor">
            </div>

            <div class="form-group mt-3">
                <label for="">Book ISBN:</label>
                <input type="text" class="form-control" name="bookisbn">
            </div>

            <div class="form-group mt-3">
                <label for="">Book Upload:</label>
                <input type="file" name="fileToupload" id="fileToupload" class="form-control">
            </div>

                <input type="submit" class="btn btn-secondary mt-3">

            </div>
        </form>
    </div>
</body>
</html>