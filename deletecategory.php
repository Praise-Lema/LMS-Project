<?php
include_once __DIR__."/connection.php";
$id = $_GET["id"];

$query = "DELETE FROM category WHERE id = '$id'";
mysqli_query($conn, $query);

header("Location: viewcategory.php");

// echo "<h2>The id of the Book is ".$id."</h2>";
?>