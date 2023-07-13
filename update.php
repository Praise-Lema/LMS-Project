<?php 

include_once __DIR__."/connection.php";
$id=$_GET['id'];
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
            $sql="UPDATE bookinfo SET booktitle='$booktitle',bookauthor='$bookauthor',bookisbn='$bookisbn',
            bookuploaded='$filename' WHERE id= '$id' ";
    if(mysqli_query($conn,$sql)){
    header('location:viewbook.php');
    }else{
        echo"ERROR".$sql."<br>".mysqli_error($conn);
    }
        }
    }
}
   
?>    