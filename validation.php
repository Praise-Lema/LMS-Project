<?php
$booktitleErr= $bookauthorErr= $bookisbnErr= $filenameErr="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST['booktitle'])){
        $booktitleErr= "book title is required";
    } 
    if(empty($_POST['bookauthor'])){
        $bookauthorErr= "book author is required";
    } 
    if(empty($_POST['bookisbn'])){
        $bookisbnErr= "book ISBN is required";
    } 
    if(empty($_POST[basename($_FILES["fileToupload"]["name"])])){
        $filenameErr= "book to be upload is required";
    } 
}
?>