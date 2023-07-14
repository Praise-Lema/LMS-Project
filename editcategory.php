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
    <title>View Category Of Books</title>
</head>
<body>
    <h1 class="text-center">Edit a category</h1>
    <div class="container">
    <form action="updatecategory.php?id=<?php echo $id;?>" method="post" enctype="multipart/form-data">
<?php

$query = "SELECT categoryofbook FROM category WHERE id = '$id'";
$result=mysqli_query($conn, $query);
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        ?>
        <div class="form-group mt-3">
                <label for="categoryofbook">Category Of Book:</label>
            <input type="text" name="bookcategory" value="<?php echo $row['categoryofbook'];?>" class="form-control" required >
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
