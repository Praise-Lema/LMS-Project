<?php
include_once __DIR__."/connection.php";

$query = "SELECT categoryofbook FROM category ";
$result=mysqli_query($conn, $query);
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        ?>
        <?php
    }
}
?>