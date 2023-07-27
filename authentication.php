<?php
include_once __DIR__."/connection.php";
if($_SERVER["REQUEST_METHOD"] == 'POST'){
$email=$_POST['email'];
$password=$_POST['password'];
 $sql="SELECT * FROM adiminstrator WHERE email = '$email' and pincode = '$password'";
 $result = mysqli_query($conn,$sql);
 if(mysqli_num_rows($result)==1){
     session_start();
     $_SESSION['auth']='true';
     header('location:index.php');
 } elseif(empty($_POST['email']) || empty($_POST['password'])){
    header('location:login.php?result=empty');
 } elseif(mysqli_num_rows($result)==0){
  header('location:login.php?result=0');   
 } 
}
 ?>