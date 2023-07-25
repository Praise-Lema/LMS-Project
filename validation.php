<?php



function validate(){
    {
        $msg = "All Fields Are Required..!!";
        return $msg;
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