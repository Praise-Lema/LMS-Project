<?php
include_once __DIR__."/connection.php";

if($_SERVER["REQUEST_METHOD"] == 'POST'){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql="SELECT * FROM adiminstrator WHERE email = '$email' and pincode = '$password'";
    $result = mysqli_query($conn,$sql);

    // Validate inputs if empty
    if(empty($email) || empty($password)){
        header('Location:login.php?result=empty');
    }else{
        // Check if user is exists
        if(mysqli_num_rows($result) == 1){
            // session_start();
            $_SESSION['auth'] = true;
            header('Location:index.php');
        }else{
            header('Location:login.php?error=1');   
        }
    }
}
 ?>