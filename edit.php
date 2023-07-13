<?php
include_once __DIR__."/connection.php";
include_once __DIR__."/Partials/navigation.php";
$id=$_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Books</title>
</head>
<body>
    <h1 class="text-center">Edit a Book</h1>
    <div class="container">
    <form action="update.php?id=<?php echo $id;?>" method="post" enctype="multipart/form-data">
<?php


$query = "SELECT id,booktitle,bookauthor,bookisbn,bookuploaded FROM bookinfo WHERE id = '$id'";
$result=mysqli_query($conn, $query);
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        ?>
        <div class="form-group mt-3">
                <label for="booktitle">Book Title:</label>
            <input type="text" name="booktitle" value="<?php echo $row['booktitle'];?>" class="form-control" >
        </div>
        <div class="form-group mt-3">
                <label for="bookauthor">Book Author:</label>
            <input type="text" name="bookauthor" value="<?php echo $row['bookauthor'];?>" class="form-control" >
        </div>
        <div class="form-group mt-3">
                <label for="bookISBN">Book ISBN:</label>
            <input type="text" name="bookisbn" value="<?php echo $row['bookisbn'];?>" class="form-control" >
        </div>
        <div class="form-group mt-3">
                <label for="bookupload">Book To Upload:</label>
            <input type="file" name="fileToupload" value="<?php echo $row['bookuploaded'];?>" class="form-control" required>
        </div>
        <?php
    }
}
?>
 <input type="submit" name="submit" value="Update" style="background-color:green;" class="btn btn-secondary mt-3">
</form>
    </div>
</body>
</html>
