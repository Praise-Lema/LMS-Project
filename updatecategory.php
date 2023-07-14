<?php 

include_once __DIR__."/connection.php";
$id=$_GET['id'];
if($_SERVER["REQUEST_METHOD"] == 'POST'){
    $bookcategory=$_POST['bookcategory'];
   
            $sql="UPDATE category SET categoryofbook='$bookcategory' WHERE id= '$id' ";
    if(mysqli_query($conn,$sql)){
    header('location:viewcategory.php');
    }else{
        echo"ERROR".$sql."<br>".mysqli_error($conn);
    }
}
?>    