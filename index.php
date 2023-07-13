<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Book</title>
    <?php 
    include_once __DIR__."/Partials/navigation.php";
    include_once __DIR__."/validation.php";
    include_once __DIR__."/connection.php";
?>

</head>
<body>


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

            <div class="form-group mt-3" >
                <label for="category">Category Of Book:</label>
                <select name="dropdown" class="form-control">
            <?php
            $query = "SELECT categoryofbook FROM category ";
$result=mysqli_query($conn, $query);
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        ?>
            <option value="<?php echo $row['categoryofbook'];?>"><?php echo $row['categoryofbook'];?></option>
     <?php           
    }
}
?>
</select>
            </div>
                <input type="submit" class="btn btn-secondary mt-3" >
            </div>
        </form>
        
    </div>
</body>
</html>