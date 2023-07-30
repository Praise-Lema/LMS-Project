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
<body class="unique">
<h1 class="text-center">View Book</h1>
<div class="container">
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Book cover</th>
            <th scope="col">Book title</th>
            <th scope="col">Book author</th>
            <th scope="col">Book isbn</th>
            <th scope="col">Book uploaded</th>
            <th scope="col">category</th> 
            
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
                    <td>
                        <img class="img-fluid image " src="<?php echo "Book-cover-images/". $row["bookcover"];?>" width="100" alt=""/>
                    </td>
                    <td><?php echo $row["booktitle"];?></td>
                    <td><?php echo $row["bookauthor"];?></td>
                    <td><?php echo $row["bookisbn"];?></td>
                    <td><?php echo $row["bookuploaded"];?></td>
                    <td><?php echo $row["category"];?></td>
                    
                    <td><a href="delete.php?id=<?php echo $row["id"];?>" class="fa fa-trash"></a>
                    <a href="edit.php?id=<?php echo $row["id"];?>"><i class="fas fa-edit"></i></a>
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