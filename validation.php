<?php

function validate(){
    {
        $msg = "All Fields Are Required..!!";
        $msg2 = "Sorry! Only .jpeg, .gif, .png, .jpg files are allowed!!";
        if($_GET['error'] == 1){
            return $msg;
        }else{
            return $msg2;
        }
    }
}
function validateemail($email, $db){

    $sql="SELECT * FROM adiminstrator WHERE email = '$email'";
    $result = mysqli_query($db, $sql);
    if(mysqli_num_rows($result) > 0){
        return 1;
    }
}

?>