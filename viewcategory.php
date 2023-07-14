<?php
 include_once __DIR__."/connection.php";
 include_once __DIR__."/Partials/navigation.php";
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View category</title>
</head>
<body>
<h1 class="text-center">Category Of Book</h1>
<div class="container">
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Category Of Book</th>  
        </tr>
        </thead>
        <?php 
        $sql="SELECT * FROM category";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_assoc($result)){
                ?>
                <tr>
                    <td><?php echo $row["id"];?></td>
                    <td><?php echo $row["categoryofbook"];?></td>
                    <td><a href="deletecategory.php?id=<?php echo $row["id"];?>" class="btn btn-danger">Delete</a>
                    <a href="editcategory.php?id=<?php echo $row["id"];?>" class="btn btn-outline-dark">Edit</a>
                        <!-- <form action="delete.php" method="get">
                    <input type="submit" class="btn btn-secondary" style="background-color: green;" value="delete">
                    </form> -->
                    </td>
                </tr> 
                <?php
            } 
    }else{
        echo "0 result";
    }
    // mysqli_close($conn);
      ?>      
    </table>
</div>
</body>
</html>