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
    <title>View Books</title>
</head>
<body>

    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">book title</th>
            <th scope="col">book author</th>
            <th scope="col">book isbn</th>
            <th scope="col">book uploaded</th>    
        </tr>
        </thead>
        <?php 
        $sql="SELECT * FROM bookinfo";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_assoc($result)){
                ?>
                <tr>
                    <td><?php echo $row["id"];?></td>
                    <td><?php echo $row["booktitle"];?></td>
                    <td><?php echo $row["bookauthor"];?></td>
                    <td><?php echo $row["bookisbn"];?></td>
                    <td><?php echo $row["bookuploaded"];?></td>
                    <td><a href="delete.php?id=<?php echo $row["id"];?>" class="btn btn-danger">Delete</a>
                    <a href="edit.php?id=<?php echo $row["id"];?>" class="btn btn-outline-dark">Edit</a>
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
</body>
</html>