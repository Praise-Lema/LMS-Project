<?php
include_once __DIR__."/connection.php";

$bookcategory=$_POST['bookcategory'];
$sql="INSERT INTO category (categoryofbook)VALUE ('$bookcategory')";
if(mysqli_query($conn,$sql)){
    header('location:viewcategory.php');
} else{
    echo"ERROR".$sql."<br>".mysqli_error($conn);
}
mysqli_close($conn);
?>