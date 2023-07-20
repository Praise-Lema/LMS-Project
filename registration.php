<?php 

include_once __DIR__."/connection.php";
include_once __DIR__."/validation.php";

if($_SERVER["REQUEST_METHOD"] == 'POST'){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];

if(validateemail($email, $conn) == 1){
    // header("Location: register.php");
    echo "<script>alert('you have an account all ready')</script>";
    die;
}else{
        $sql="INSERT INTO adiminstrator(firstname,lastname,email,pincode)VALUES('$firstname','$lastname','$email','$password')";
            if(mysqli_query($conn,$sql)){
            header('location:login.php');
            }else{
                echo"ERROR".$sql."<br>".mysqli_error($conn);
            } 
        }
    }
  
   /* if(empty($_POST['booktitle']) || empty($_POST['bookauthor']) || empty($_POST['bookisbn']) || empty($_POST[basename($_FILES["fileToupload"]["name"])]) || empty($_POST['dropdown'])){
        header("Location: index.php?error=1");
    }*/ 
?>    