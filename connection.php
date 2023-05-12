<?php
$conn=mysqli_connect("localhost","root","","lms project");
if(!$conn){
    die("connection failed"
    .mysql_connect_error());
}
$booktitle=$_REQUEST['booktitle'];
$bookauthor=$_REQUEST['bookauthor'];
$bookisbn=$_REQUEST['bookisbn'];

// kwanzia apo chini ndo panasumbua


$sql="INSERT INTO book info(Book Title,Book Author,Book ISBN)VALUES('$booktitle',
'$bookauthor','$bookisbn')";
if(mysqli_query($conn,$sql)){
echo "data is successfull submited";
}else{
    echo"ERROR".$sql."<br>".mysqli_error($conn);
}
mysqli_close($conn);
?>