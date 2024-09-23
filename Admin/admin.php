<?php
session_start();

?>

<?php

$con = mysqli_connect("localhost","root","","db_student");
$aemail = $_POST['email'];
$apwd = $_POST['pwd'];
$query = "SELECT * FROM tbl_admin where admin_email = '$aemail' and  admin_pwd = '$apwd'";
$result = mysqli_query($con,$query);
$row = mysqli_num_rows($result);
if($row == true){
    echo json_encode($row);
    $_SESSION['admin_login_true'] = $row;
    $_SESSION['email'] = $aemail;
}
else{
    echo json_encode($row);
}

?>