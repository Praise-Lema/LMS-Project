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
    $message='';

    // Check Inputs if empty
    if(empty($booktitle) || empty($bookauthor) || empty($bookisbn) || empty($filename)){
        header("Location: index.php?error=1");
    }else{
        // Check File extension
        if($imageFileType!= "jpg" && $imageFileType!= "png" && $imageFileType!= "jpeg" && $imageFileType != "gif"){
            header("Location: index.php?error=2");
        }else{
            // Submit data to the database
            $sql="INSERT INTO bookinfo(booktitle,bookauthor,bookisbn,bookuploaded,category,bookcover)VALUES('$booktitle','$bookauthor','$bookisbn','$filename','$category','$image')";
            if(mysqli_query($conn,$sql)){
                // Move files to specified directory
                move_uploaded_file($_FILES["fileToupload"]["tmp_name"],$target_file);
                move_uploaded_file($_FILES["imageToupload"]["tmp_name"],$image_target_file);

                // Redirect
                header("Location: viewbook.php");

                }else{
                    // Output SQL error if any
                    echo "ERROR".$sql."<br>".mysqli_error($conn);
                }
            }
        }    
    }

?>    