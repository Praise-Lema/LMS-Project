<?php 

include_once __DIR__."/connection.php";

if($_SERVER["REQUEST_METHOD"] == 'POST'){
    $booktitle=$_POST['booktitle'];
    $bookauthor=$_POST['bookauthor'];
    $bookisbn=$_POST['bookisbn'];
    $category=$_POST['dropdown'];
    $target_dir="Books/";
    $filename=basename($_FILES["fileToupload"]["name"]);
    $image_dir="Book-cover-images/";
    $image=basename($_FILES["imageToupload"]["name"]);
    $image_target_file=$image_dir.$image;
    $target_file=$target_dir.$filename;
    $uploadok=1;
    $imageFileType=strtolower(pathinfo($image_target_file,PATHINFO_EXTENSION));
    $message='$_POST["submit"]&& !empty($_FILES["fileToupload"]["name"]) && !empty($_FILES["imageToupload"]["name"])';
    if($imageFileType!= "jpg" && $imageFileType!= "png" && $imageFileType!= "jpeg" && $imageFileType != "gif"){
                echo "Sorry only JPG, JPEG, PNG & GIF file are allowed ";
    }else if(isset($message)){
        if(move_uploaded_file($_FILES["fileToupload"]["tmp_name"],$target_file) && move_uploaded_file($_FILES["imageToupload"]["tmp_name"],$image_target_file)){
            $sql="INSERT INTO bookinfo(booktitle,bookauthor,bookisbn,bookuploaded,category,bookcover)VALUES('$booktitle','$bookauthor','$bookisbn','$filename','$category','$image')";
    if(mysqli_query($conn,$sql)){
    header("Location: viewbook.php");
    }else{
        echo"ERROR".$sql."<br>".mysqli_error($conn);
    }
        }
    }
}
    if(empty($_POST['booktitle']) || empty($_POST['bookauthor']) || empty($_POST['bookisbn']) || empty($_POST[basename($_FILES["fileToupload"]["name"])]) || empty($_POST['dropdown'])){
        header("Location: index.php?error=1");
    } 
?>    