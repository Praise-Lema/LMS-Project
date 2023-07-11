<?php 

include_once __DIR__."/connection.php";

if($_SERVER["REQUEST_METHOD"] == 'POST'){
    $booktitle=$_POST['booktitle'];
    $bookauthor=$_POST['bookauthor'];
    $bookisbn=$_POST['bookisbn'];
    $target_dir="Books/";
    $filename=basename($_FILES["fileToupload"]["name"]);
    $target_file=$target_dir.$filename;
    $uploadok=1;
    $filetype=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $message='$_POST["submit"]&& !empty($_FILES["fileToupload"]["name"])';
    if(isset($message)){
        if(move_uploaded_file($_FILES["fileToupload"]["tmp_name"],$target_file)){
            $sql="INSERT INTO bookinfo(booktitle,bookauthor,bookisbn,bookuploaded)VALUES('$booktitle','$bookauthor','$bookisbn','$filename')";
    if(mysqli_query($conn,$sql)){
    header('Location: viewbook.php');
    }else{
        echo"ERROR".$sql."<br>".mysqli_error($conn);
    }
        }
    }
}
    if(empty($_POST['booktitle']) || empty($_POST['bookauthor']) || empty($_POST['bookisbn']) || empty($_POST[basename($_FILES["fileToupload"]["name"])])){
        header("Location: index.php?error=1");
    }
?>    