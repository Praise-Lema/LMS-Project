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
    <h1 class="text-center">Add a Book</h1>
    <div class="container">

    <?php if(isset($_GET["error"])): ?>
        <div class="alert alert-danger">
            <?php echo validate(); ?>
        </div>
    <?php endif; ?>

        <form id="myform" action="addbook.php" method="post" enctype="multipart/form-data">
            
            <div class="form-group mt-3">
                <label for="booktitle">Book Title:</label>
                <input type="text" class="form-control" name="booktitle" id="booktitle">
            </div>

            <div class="form-group mt-3"  >
                <label for="bookauthor">Book Author:</label>
                <input type="text" class="form-control" name="bookauthor" id="bookauthor">
            </div>

            <div class="form-group mt-3" >
                <label for="bookisbn">Book ISBN:</label>
                <input type="text" class="form-control" name="bookisbn" id="bookisbn">
            </div>

            <div class="form-group mt-3" >
                <label for="fileToupload">Book Upload:</label>
                <input type="file" name="fileToupload" id="fileToupload" class="form-control">
            </div>

                <input type="submit" class="btn btn-secondary mt-3" >

            </div>
        </form>
        
    </div>
</body>
</html>