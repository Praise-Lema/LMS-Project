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
 } else {
  function authentication(){
    {
        $msg = "Wrong email or password..!!";
        return $msg;
    
    }
}
     
 }
}
 ?>