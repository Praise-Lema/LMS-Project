<?php



function validate(){
    {
        $msg = "All Fields Are Required..!!";
        return $msg;
    }
}
function validateemail($email){
    
    include_once __DIR__."/connection.php";

    $sql="SELECT * FROM adiminstrator WHERE email=$email";

    mysqli_query($conn,$sql);

}
?>